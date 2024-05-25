<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view("auth/loginView");
    }

    public function authenticate()
    {
        $session = session();

        $users = new User();

        $data =
            $users
            ->where('username', $this->request->getVar("username"))
            ->where('password', $this->request->getVar("password"))
            ->first();

        if ($data) {
            $session_data = [
                'id'            => $data['id'],
                'name'          => $data['name'],
                'username'      => $data['username'],
            ];

            $session->set($session_data);
            return redirect()->route('dashboard');
        } else {
            return "tak ada";
        }
    }

    public function register()
    {
        return view("auth/RegisterView");
    }

    public function registration()
    {
        // //include helper form
        // helper(['form']);
        // //set rules validation form
        // $rules = [
        //     'name'          => 'required|min_length[3]|max_length[20]',
        //     'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
        //     'password'      => 'required|min_length[6]|max_length[200]',
        //     'confpassword'  => 'matches[password]'
        // ];

        $model = new User();
        $data = [
            'name'     => $this->request->getVar('name'),
            'username'    => $this->request->getVar('username'),
            // 'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            'password' => $this->request->getVar('password')
        ];
        $model->save($data);
        return redirect()->to('/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
