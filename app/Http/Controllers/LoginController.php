<?php

namespace App\Http\Controllers;

use App\Http\Requests;


/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Process a login HTTP POST
     *
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request) {

        //\Debugbar::info("0k entra a postLogin");
        echo "asdasd";
        if ($this->login($request->email.$request->password)){
            return redirec()->route('home');
        } else {
            return redirec()->route('login');
        }
    }

    /**
     * get Login
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('login');
    }
}
