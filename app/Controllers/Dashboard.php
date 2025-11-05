<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\UserModel;
use App\Models\SurveyModel;

use App\Controllers\BaseController;

use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {

        //get session data
        $session = session();
        $userData = $session->get();

        
        $clientModel = new ClientModel();
        $userModel = new UserModel();
        $surveyModel = new SurveyModel();

        //get el total de register de la tabla clients y users
        $totalClients = $clientModel->countAll();
        $totalUsers = $userModel->countAll();
        $totalSurvey = $surveyModel->countAll();

        $data = array(
            'userData' => $userData,
            'totalClients' => $totalClients,
            'totalUsers' => $totalUsers,
            'totalSurvey' => $totalSurvey
        );

        return view('admin/panel', $data);
    }

    public function clients()
    {

        //get session data
        $session = session();
        $userData = $session->get();
        
        $clientModel = new ClientModel();
        //get el total de register de la tabla clients y users
        // obtener todos los clientes ordenados por id descendente
        $clients = $clientModel->orderBy('id', 'DESC')->findAll();
        // contar clientes y obtener total de usuarios para el array $data
        $totalClients = count($clients);

        $data = array(
            'userData' => $userData,
            'clients' => $clients,
            'totalClients' => $totalClients,
        );

        return view('admin/clients', $data);
    }

    public function users()
    {

        //get session data
        $session = session();
        $userData = $session->get();
        
        $userModel = new UserModel();
        //get el total de register de la tabla clients y users
        // obtener todos los clientes ordenados por id descendente
        $users = $userModel->orderBy('id', 'DESC')->findAll();
        // contar clientes y obtener total de usuarios para el array $data
        $totalUsers = count($users);

        $data = array(
            'userData' => $userData,
            'users' => $users,
            'totalUsers' => $totalUsers,
        );

        return view('admin/users', $data);
    }

    public function surveys()
    {

        //get session data
        $session = session();
        $userData = $session->get();
        
        $surveyModel = new SurveyModel();
        //get el total de register de la tabla clients y users
        // obtener todos los clientes ordenados por id descendente
        $surveys = $surveyModel->orderBy('id', 'DESC')->findAll();
        // contar clientes y obtener total de usuarios para el array $data
        $totalSurveys = count($surveys);

        $data = array(
            'userData' => $userData,
            'surveys' => $surveys,
            'totalSurveys' => $totalSurveys,
        );

        return view('admin/surveys', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/iniciar-sesion');
    }
}
