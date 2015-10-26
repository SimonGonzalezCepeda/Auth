<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resource', function () {
    \Debugbar::start_measure("resource");
    $authenticated = false;
    Session::set('authenticated',true);
    \Debugbar::info("BOOOM!");
    \Debugbar::info(Session::all());
    if (Session::has('authenticated')){
       if (Session::get('authenticated') == true) {
           $authenticated = true;
       }
    }


    if ($authenticated){
        \Debugbar::stop_measure("resource");
        return view('resource');
    }else{
        \Debugbar::stop_measure("resource");
        return view('login');
    }
});