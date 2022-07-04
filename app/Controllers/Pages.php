<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }
    public function profile()
    {
        $user_id = $this->usersModel->where('user_id', session()->get('user_id'))->first();
        $data['user'] = $user_id;
        return view('pages/userProfile', $data);
    }
}