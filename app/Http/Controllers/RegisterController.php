<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister()
    {
        //$user = new User();
        //$user->name = Input::get('name');
        //$user->password = Input::get('password');
        //$user->email = Input::get('email');
        //$user->save();
        User::create(Input::all());

    }
}
