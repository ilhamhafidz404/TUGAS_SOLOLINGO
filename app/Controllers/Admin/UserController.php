<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        $users = new User();

        $data["users"] =
            $users
            ->where('user_type_id != 3')
            ->join('user_types', 'users.user_type_id = user_types.id')
            ->select('users.name, users.username, users.id, users.user_type_id, user_types.name as user_type_name')
            ->findAll();

        return view("admin/UserView", $data);
    }

    public function destroy()
    {
        $model = new User();
        $model->where('id', (int) $_GET['id'])->delete();

        return redirect()->back();
    }
}
