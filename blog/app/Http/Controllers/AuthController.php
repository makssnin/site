<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function LoginForm (){
        return view("auth.login");
    }
    public function Logout (){
        auth("web")->logout();
        return redirect(route("main"));
    }
    public function registration (){
        return view("auth.registration");
    }

    public function RegistrationSubmit (Request $request){
       $data = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'

        ]);
        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            auth("web")->login($user);
        }
        return redirect(route("main"));
    }

    public function LoginSubmit (Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        if(auth("web")->attempt($data)){
            return redirect(route("main"));
        }

        return redirect(route("login"))->withErrors(["email"=>"Не верный логин или пароль"]);
    }











}



