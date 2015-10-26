<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function postLogin($request) {
        //TODO
        dd($request->all());
        \Debugbar::info("0k entra a postLogin");
        echo "asdasd";
        if ($this->login($request->email.$request->password)){
            return redirec()->route('home');
        } else {
            return redirec()->route('login');
        }
    }

    public function getLogin()
    {
        return view('login');
    }
}
