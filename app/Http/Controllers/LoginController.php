<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller{

    public function login(){
        return view("login");
    }

    public function logar(Request $request) {
        $inputs = $request->input();

        if($inputs["logEmail"] == ""){
            return view("login");
        }
        if($inputs["logSenha"] == ""){
            return view("login");
        }

        $Usuario = Usuario::where('email','=',$inputs["logEmail"])->first();

        if(!isset($Usuario)){
            return view("login");
        }

        if(md5($inputs["logSenha"]) != $Usuario->password){
            return view("login");      
        }

        session(['name' => $Usuario->name]);

        return redirect()->route('index');

    }

    public function cadastrar(Request $request) {
        
        //$Usuarios = Usuario::all();

        /*
        $Usuarios = Usuario::where('name','=','n1')
        ->where('name','=','n1')
        ->get();
        */

        $inputs = $request->input();
        $Usuarios = Usuario::where('email','=',$inputs["cadEmail"])->count();
        
        if($inputs["cadNome"] == ""){
            return view("login");
        }
        if($inputs["cadEmail"] == ""){
            return view("login");
        }
        if($inputs["cadSenha"] == ""){
            return view("login");
        }
        if($Usuarios > 0){
            return view("login");
        }

        $Usuario = new Usuario();

        $Usuario->name = $inputs["cadNome"];
        $Usuario->email = $inputs["cadEmail"];
        $Usuario->password = md5($inputs["cadSenha"]);

        $Usuario->save();

        session(['name' => $Usuario->name]);

        return redirect()->route('index');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('index');
    }

} 
