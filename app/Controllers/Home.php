<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\UserModel;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function login(): string    
    {
        return view('login');
    }

    public function thanks(): string    
    {
        return view('thanks');
    }

    // Nuevo método para manejar el envío del formulario de contacto (POST)
    public function login_action()
    {
        // Lo dejaremos al principio como en tu código original, pero lo usamos ahora.
        $UserModel = new UserModel();

        // 1. Verificar que la petición sea POST
        if (!$this->request->is('post')) {
            // Si no es POST, simplemente regresa a la página anterior
            return redirect()->back(); 
        }

        // 2. Definir las reglas de validación
        $rules = [
            'email'     => 'required|valid_email|max_length[100]', // Añadido is_unique
            'password'  => 'required|min_length[3]|max_length[100]', // Añadido
        ];
        
        // 3. Validar los datos
        if (!$this->validate($rules)) {
            // Si la validación falla (usando $this->validate), CodeIgniter maneja
            // automáticamente la redirección con los errores y los datos antiguos

            // Obtener el array asociativo de errores (ej: ['dni' => 'El campo DNI es obligatorio.'])
            $validationErrors = $this->validator->getErrors();
            // Unir todos los mensajes de error en una sola cadena HTML
            // Esto es ideal para mostrarlo en una sola notificación Toastr
            $errorMessage = implode('<br>', $validationErrors);

            $data = [
                'status' => false,
                // Usamos getErrors() para obtener el array de errores
                'message' => $errorMessage
            ];
            // Si la petición es AJAX, devolvemos el JSON.
            // Si no, podríamos redirigir, pero tu código original devuelve JSON y hace 'exit()'.
            echo json_encode($data);
            exit(); 
        }

        // Obtener los datos del POST
        $postData = $this->request->getPost(); 
        
        // Normalizar entrada
        $email = isset($postData['email']) ? trim($postData['email']) : '';
        $password = isset($postData['password']) ? $postData['password'] : '';

        // Buscar usuario por email
        $user = $UserModel->where('email', $email)->first();

        if (!$user) {
            $data['status'] = false;
            $data['message'] = 'Usuario no encontrado.';
            echo json_encode($data);
            exit(); 

        } else {
            // Verificar si la cuenta está activa (si aplica)
            if (isset($user['active']) && (int)$user['active'] !== 1) {

                $data['message'] = 'Cuenta no está activa.';
                $data['status'] = false;
                echo json_encode($data);
                exit(); 

            } elseif (password_verify($password, $user['password'])) {
                // Credenciales válidas: establecer sesión
                $session = session();
                $session->regenerate();
                $session->set([
                    'user_id'   => $user['id'],
                    'name'     => $user['name'],
                    'role'     => $user['role'],
                    'email'     => $user['email'],
                    'logged_in' => true,
                ]);
                $id = $user['id'];
                $data['status'] = true;
                $data['message'] = 'Bienvenido';

            } else {
                $data['status'] = false;
                $data['message'] = 'Contraseña incorrecta';
            }
        }

        echo json_encode($data);
        exit(); 

    }

    // Nuevo método para manejar el envío del formulario de contacto (POST)
    public function contact()
    {

        // 1. Verificar que la petición sea POST
        if (!$this->request->is('post')) {
            // Si no es POST, simplemente regresa a la página anterior
            return redirect()->back(); 
        }

        // 2. Definir las reglas de validación
        $rules = [
            'full_name' => 'required|min_length[3]|max_length[50]',
            'dni'       => 'required|min_length[8]|max_length[8]|is_unique[ci_clients.dni]', // Añadido is_unique
            'phone'     => 'required|numeric|min_length[8]|max_length[20]',
            'email'     => 'required|valid_email|max_length[100]|is_unique[ci_clients.email]', // Añadido is_unique
        ];
        
        // 3. Validar los datos
        if (!$this->validate($rules)) {
            // Si la validación falla (usando $this->validate), CodeIgniter maneja
            // automáticamente la redirección con los errores y los datos antiguos

            // Obtener el array asociativo de errores (ej: ['dni' => 'El campo DNI es obligatorio.'])
            $validationErrors = $this->validator->getErrors();
            // Unir todos los mensajes de error en una sola cadena HTML
            // Esto es ideal para mostrarlo en una sola notificación Toastr
            $errorMessage = implode('<br>', $validationErrors);

            $data = [
                'status' => false,
                // Usamos getErrors() para obtener el array de errores
                'message' => $errorMessage
            ];
            // Si la petición es AJAX, devolvemos el JSON.
            // Si no, podríamos redirigir, pero tu código original devuelve JSON y hace 'exit()'.
            echo json_encode($data);
            exit(); 
        }

        // --- Lógica de Inserción ---

        // Instanciamos el modelo DENTRO de la validación, o al principio.
        // Lo dejaremos al principio como en tu código original, pero lo usamos ahora.
        $ClientModel = new ClientModel();

        // Obtener los datos del POST
        $postData = $this->request->getPost(); 
        
        // Crear el array de datos para la base de datos (DB)
        // NOTA: Los nombres de los keys DEBEN coincidir con tus columnas de DB.
        $param = [
            // Normalizar: 'full_name' del formulario -> 'name' en la DB
            "name"    => $postData['full_name'], 
            "dni"     => $postData['dni'],
            "email"   => $postData['email'],
            "phone"   => $postData['phone'],
            // Campos de Control
            "date"    => date("Y-m-d H:i:s"), // Si usas TimeStamps en el modelo, esto es redundante
            "active"  => '1'
        ];
        // 4. Insertar los datos en la base de datos
        // CI4 Model save() inserta o actualiza automáticamente.
        // Si tienes la columna 'id' en $param, actualiza; si no, inserta.
        $id = $ClientModel->save($param);

        // 5. Verificar y devolver respuesta JSON
        if ($id) {

            //send email message
            if($postData['email']){
                $this->message($postData['full_name'], $postData['email']);
            }

            $data['status'] = true;
            $data['message'] = '¡Registro exitoso!';
        } else {
            // Si save() falla por alguna razón (ej. error de DB), $id es falso.
            $data['status'] = false;
            $data['message'] = 'Ocurrió un error al guardar los datos.';
        }
        
        // Devolver la respuesta JSON y finalizar la ejecución
        echo json_encode($data);
        exit(); 
    }

    // Nuevo método para manejar el envío del formulario de encuesta (POST)
    public function survey()
    {
        // 1. Verificar que la petición sea POST
        if (!$this->request->is('post')) {
            // Si no es POST, simplemente regresa a la página anterior
            return redirect()->back(); 
        }

        // 2. Definir las reglas de validación
        $rules = [
            'preacher' => 'required|min_length[3]|max_length[255]',
            'ministry_music'       => 'required|min_length[3]|max_length[255]|', // Añadido is_unique
        ];
        
        // 3. Validar los datos
        if (!$this->validate($rules)) {
            // Si la validación falla (usando $this->validate), CodeIgniter maneja
            // automáticamente la redirección con los errores y los datos antiguos

            // Obtener el array asociativo de errores (ej: ['dni' => 'El campo DNI es obligatorio.'])
            $validationErrors = $this->validator->getErrors();
            // Unir todos los mensajes de error en una sola cadena HTML
            // Esto es ideal para mostrarlo en una sola notificación Toastr
            $errorMessage = implode('<br>', $validationErrors);

            $data = [
                'status' => false,
                // Usamos getErrors() para obtener el array de errores
                'message' => $errorMessage
            ];
            // Si la petición es AJAX, devolvemos el JSON.
            // Si no, podríamos redirigir, pero tu código original devuelve JSON y hace 'exit()'.
            echo json_encode($data);
            exit(); 
        }

        // --- Lógica de Inserción ---

        // Instanciamos el modelo DENTRO de la validación, o al principio.
        // Lo dejaremos al principio como en tu código original, pero lo usamos ahora.
        $SurveyModel = new SurveyModel();

        // Obtener los datos del POST
        $postData = $this->request->getPost(); 
        
        // Crear el array de datos para la base de datos (DB)
        // NOTA: Los nombres de los keys DEBEN coincidir con tus columnas de DB.
        $param = [
            // Normalizar: 'full_name' del formulario -> 'name' en la DB
            "preacher"    => $postData['preacher'], 
            "ministry_music"     => $postData['ministry_music'],
        ];
        // 4. Insertar los datos en la base de datos
        // CI4 Model save() inserta o actualiza automáticamente.
        // Si tienes la columna 'id' en $param, actualiza; si no, inserta.
        $id = $SurveyModel->save($param);

        // 5. Verificar y devolver respuesta JSON
        if ($id) {
            //send email message



            $data['status'] = true;
            $data['message'] = '¡Gracias por participar!';
        } else {
            // Si save() falla por alguna razón (ej. error de DB), $id es falso.
            $data['status'] = false;
            $data['message'] = 'Ocurrió un error al guardar los datos.';
        }
        
        // Devolver la respuesta JSON y finalizar la ejecución
        echo json_encode($data);
        exit(); 
    }

    public function message($name, $email_customer)
    {
        $mensaje = wordwrap("<html>
        <table width='750' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#f8f6f7' style='padding:15px 75px 15px'>
        <tbody><tr>
          <td align='center'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='background-color:#fff'>
              <tbody>
              <tr>
                <td>
                  <table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                    <tbody><tr>
                      <td width='100%' style='padding:43px 0 38px;text-align:center'>
                        <table align='center' bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0'>
                          <tbody><tr style='text-align:center'>
                              <td height='26'>
                              <img border='0' style='display:inline-block' src='https://avivamientoperug3.com/assets/img/logo/logo.png' width='90' class='CToWUd'>
                              </td>
                              </tr>
                        </tbody>
                      </table>
                    </td>
                    </tr>
                    <tr>
                      <td style='font:20px Arial;padding:0 0 15px;color:#485360;text-align:center'>
                        Felicidades $name,                                
                      </td>
                    </tr>
                    <tr>
                      <td style='color:#485360;padding:0 0 15px;font:20px Arial;padding:0 7%;text-align:center'>
                        <b>Su registro para el Mega Evento Evangelístico en Pichari - Vraem se ha completado correctamente. Lo esperamos con muchas ansias.</b>
                      </td>
                    </tr>
                    <tr>
                        <br/>
                    </tr>
      </tbody></table>
                    .</html>", 70, "\n", true);

        //set data to send email
        $email = \Config\Services::email();
        $email->setFrom("system@avivamientoperug3.com", "Registro exitoso");
        $email->setTo($email_customer);
        $email->setSubject("Mega Evento Evangelístico en Pichari - Vraem | del 11 al 14 DIC");
        $email->setMailType('html');
        $email->setMessage($mensaje);
        $email->send();
        return true;
    }
}
