<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\UnilevelModel;
use App\Models\UserModel;

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

        //get el total de register de la tabla clients y users
        $totalClients = $clientModel->countAll();
        $totalUsers = $userModel->countAll();

        $data = array(
            'userData' => $userData,
            'totalClients' => $totalClients,
            'totalUsers' => $totalUsers
        );

        return view('admin/panel', $data);
    }

    public function estructura($id = null)
    {
        //load models
        $ClientModel = new ClientModel();
        $UnilevelModel = new UnilevelModel();

        //verify method post
        $res = service('request')->getPost();
        if ($res) {
            $search = $res['search'];
            $search_explo = explode(" (", $search);
            $code = $search_explo[0];
            //get data by username
            $obj_customer = $ClientModel->where('code', $code)->first();

            if ($obj_customer) {
                $id = $obj_customer['id'];
            } else {
                $id = 1;
            }
        } else {
            if (is_null($id)) {
                $id = 1;
            }
        }

        //get session data
        $session = session();
        $userData = $session->get();

        //set var
        $customer_id_n2 = "";
        $customer_id_n3 = "";
        $obj_customer_n3 = "";
        $obj_customer_n4 = "";

        //get data clients
        $obj_customer = $ClientModel->find($id);
        //get partner level 2
        $builder = $ClientModel->builder();
        $builder->select('ci_clients.*, ci_unilevels.*')
            ->join('ci_unilevels', 'ci_clients.id = ci_unilevels.client_id', 'inner')
            ->where('ci_unilevels.sponsor_id', $id);
        $query = $builder->get();
        $obj_customer_n2 = $query->getResult();
        //set var
        if ($obj_customer_n2) {
            foreach ($obj_customer_n2 as $key => $value) {
                $customer_id_n2 .= $value->id . ",";
            }
            //DELETE LAST CARACTER ON STRING
            $customer_id_n2 = substr($customer_id_n2, 0, strlen($customer_id_n2) - 1);
            if ($customer_id_n2) {
                //get data level 3
                //$obj_customer_n3 = $UnilevelModel->get_partners_in_level($customer_id_n2);

                $builder->select('ci_clients.*, ci_unilevels.*')
                    ->join('ci_unilevels', 'ci_clients.id = ci_unilevels.client_id', 'inner')
                    ->whereIn('ci_unilevels.sponsor_id', explode(',', $customer_id_n2));
                $query = $builder->get();
                $obj_customer_n3 = $query->getResult();

                if ($obj_customer_n3) {
                    foreach ($obj_customer_n3 as $key => $value) {
                        $customer_id_n3 .= $value->customer_id . ",";
                    }
                    //DELETE LAST CARACTER ON STRING
                    $customer_id_n3 = substr($customer_id_n3, 0, strlen($customer_id_n3) - 1);
                    //get data level 4
                    $obj_customer_n4 = $UnilevelModel->get_partners_in_level($customer_id_n3);
                }
            }
            //get data    
        }
        //get data customer active
        $obj_customer_button_search = $ClientModel
            ->orderBy('name', 'ASC')
            ->orderBy('lastname', 'ASC')
            ->findAll();
        
        //send
        $data = array(
            'userData' => $userData,
            'obj_customer' => $obj_customer,
            'obj_customer_n2' => $obj_customer_n2,
            'obj_customer_n3' => $obj_customer_n3,
            'obj_customer_n4' => $obj_customer_n4,
            'id' => $id,
            'obj_customer_button_search' => $obj_customer_button_search,
        );
        return view('admin/structure', $data);
    }

    public function estructura_up()
    {
        //ACTIVE CUSTOMER NORMALY
        if ($this->request->isAJAX()) {
            //var
            $sponsor_id = null;
            //get data mehotd post
            $res = service('request')->getPost();
            $id = $res['id'];
            //query
            $Unilevels = new UnilevelModel();
            $obj_unilevel = $Unilevels->get_sponsor_id_by_customer_id($id);
            if ($obj_unilevel) {
                $sponsor_id = $obj_unilevel->sponsor_id;
            }
            //verify
            if (!is_null($sponsor_id) && $sponsor_id != 0 && $sponsor_id != 1) {
                $data['status'] = true;
                $data['url'] = site_url() . "dashboard/estructura/$sponsor_id";
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
            exit();
        }
    }

    public function clients()
    {

        //get session data
        $session = session();
        $userData = $session->get();
        
        $clientModel = new ClientModel();
        //get el total de register de la tabla clients y users
        // obtener todos los clientes ordenados por id descendente
        $clients = $clientModel->select('ci_clients.*, ci_unilevels.*')
                    ->join('ci_unilevels', 'ci_clients.id = ci_unilevels.client_id', 'left')
                    ->orderBy('ci_clients.id', 'DESC')
                    ->findAll();

        


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

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
}
