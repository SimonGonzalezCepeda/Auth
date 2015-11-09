<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;


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

    private function login($email, $password)
    {
        //$user = User::findOrFail(id); //Per a que peti.
        //$user = User::all();
        $user = User::where('email',$email)->first();  //Este tipus de consultes no torna un sol objecte.

        if ($user == null){
            return false;
        }
        if (Hash::check($password, $user->password)) {
            return true;
        }else {
            return false;
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
