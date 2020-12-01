<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function validarLogin(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');

        if ($user === 'leslie.granados'){
            $url = 'dashboard';
        } else{
            $url = 'login';
        }

        return view($url,[
            'user'=>$request->input('user')
        ]);
    }
}
