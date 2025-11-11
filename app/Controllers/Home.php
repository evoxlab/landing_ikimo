<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\UnilevelModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function thanks(): string
    {
        return view('thanks');
    }

    public function login(): string
    {
        return view('login');
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
    public function register_action()
    {

        // 1. Verificar que la petición sea POST
        if (!$this->request->is('post')) {
            // Si no es POST, simplemente regresa a la página anterior
            return redirect()->back();
        }

        // 2. Definir las reglas de validación
        $rules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'lastname' => 'required|min_length[3]|max_length[50]',
            'phone'     => 'required|min_length[6]|max_length[20]',
            'country'     => 'required',
            'sponsor' => [
                'rules'  => 'required|in_list[yes,no]',
                'errors' => [
                    'required' => 'Debe seleccionar una opción.',
                    'in_list'  => 'La opción seleccionada no es válida.'
                ]
            ],
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
        $UnilevelModel = new UnilevelModel();
        // Obtener los datos del POST
        $postData = $this->request->getPost();
        //set var sponsor
        $sponsor = $postData['sponsor'] === 'yes' ? 1 : 0;
        //validar Sponsor
        if ($sponsor == 1) {
            //insert into unilevel table
            $sponsor_code = isset($postData['sponsor_code']) ? $postData['sponsor_code'] : '';
            $sponsor_name = isset($postData['sponsor_name']) ? $postData['sponsor_name'] : '';

            $sponsorClient = $ClientModel->select('id')->where('code', $sponsor_code)->first();
            $sponsor_unilevel_id = $sponsorClient['id'] ?? null;

            if (!$sponsor_unilevel_id) {
                $data['status'] = false;
                $data['message'] = 'Código de patrocinador inválido.';
                echo json_encode($data);
                exit();
            }
        }

        // Crear el array de datos para la base de datos (DB)
        // NOTA: Los nombres de los keys DEBEN coincidir con tus columnas de DB.
        $param = [
            // Normalizar: 'full_name' del formulario -> 'name' en la DB
            "name"    => $postData['name'],
            "lastname"     => $postData['lastname'],
            "email"   => $postData['email'],
            "country"   => $postData['country'],
            "phone"   => $postData['phone'],
            // Campos de Control
            "active"  => '1'
        ];
        // 4. Insertar los datos en la base de datos
        // CI4 Model save() inserta o actualiza automáticamente.
        $id = $ClientModel->save($param);

        //actualizar el nuevo codigo del cliente creado
        $first = mb_strtoupper(mb_substr(trim($postData['name']), 0, 1, 'UTF-8'), 'UTF-8');
        $last  = mb_strtoupper(mb_substr(trim($postData['lastname']), 0, 1, 'UTF-8'), 'UTF-8');
        $new_code = $first . $last . '0' . $ClientModel->getInsertID();
        $ClientModel->update($ClientModel->getInsertID(), ['code' => $new_code]);

        // 5. Verificar y devolver respuesta JSON
        if ($id) {
            // 6.  Verificar si se seleccionó patrocinador y guardar en Unilevel
            if ($sponsor == 1) {
                //insert into unilevel table
                $unilevel_param = [
                    "client_id"    => $ClientModel->getInsertID(),
                    "sponsor_id"     => $sponsor_unilevel_id,
                    "sponsor_code"     => $sponsor_code,
                    "sponsor_name"     => $sponsor_name
                ];
                $UnilevelModel->save($unilevel_param);

                //send email message
                $this->message($postData['name'], $postData['email'], $new_code);
            } else {

                $unilevel_param = [
                    "client_id"    => $ClientModel->getInsertID(),
                    "sponsor_id"     => 1,
                    "sponsor_code"     => "BR01",
                    "sponsor_name"     => "Benjamin Romero"
                ];
                $UnilevelModel->save($unilevel_param);

                //send email message
                $this->message($postData['name'], $postData['email'], $new_code);
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

    public function search_sponsor()
    {
        $ClientModel = new ClientModel();
        // Obtener los datos del POST
        $postData = $this->request->getPost();
        //set var sponsor
        $sponsorCode = $postData['code'];

        $sponsorClient = $ClientModel->select('*')->where('code', $sponsorCode)->first();
        $sponsor_id = $sponsorClient['id'] ?? null;

        if ($sponsor_id) {

            $data['status'] = true;
            $data['message'] = $sponsorClient['name'] . ' ' . $sponsorClient['lastname'];
        } else {

            $data['status'] = false;
            $data['message'] = "";
        }

        echo json_encode($data);
        exit();
    }


    public function message($name, $email_customer, $new_code)
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
                              <img border='0' style='display:inline-block' src='https://www.elsecretodeikimo.info/assets/images/logo.png' width='90' class='CToWUd'>
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
                        <b>Su registro para El secreto de Ikimo se ha completado correctamente.</b>
                      </td>
                    </tr>
                    <tr>
                      <td style='font:20px Arial;padding:0 0 15px;color:#485360;text-align:center'>
                        Sú código de patrocinador es: $new_code,                                
                      </td>
                    </tr>
                    <tr>
                        <br/>
                    </tr>
      </tbody></table>
                    .</html>", 70, "\n", true);

        //set data to send email
        $email = \Config\Services::email();
        $email->setFrom("system@elsecretodeikimo.info", "Registro exitoso");
        $email->setTo($email_customer);
        $email->setSubject("Bienvenido al Secreto de Ikimo");
        $email->setMailType('html');
        $email->setMessage($mensaje);
        $email->send();
        return true;
    }
}
