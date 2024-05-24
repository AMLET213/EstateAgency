<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function login(Request $request){
        $login = $request->input('login');
        $pass = $request->input('pass');
        $admin = Admin::get()->where("login",$login)->first();
        if($admin!==null){
        if($admin["password"]==$pass){
            session(['login'=>true]);
            return redirect('/adminPanel');
        }else{
            $message = "Неверный логин или пароль";
            return view('Admin',['message' => $message]);
        }

        }else{
            $message = "Неверный логин или пароль";
            return view('Admin',['message' => $message]);
        }

    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
