<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function login(){
        return view("login");
    }

    public function logar(Request $request) {
        
        if ($request->email == 'teste@teste.com' && $request->senha == '1234') {
            session(['nome' => 'teste']);
            return redirect()->route('vacina.blade.php');
        } else
            return redirect('login.blade.php')->with('erro','Login ou Senha Invalida');
    }

} 
