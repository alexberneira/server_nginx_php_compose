<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function fcadastrar(){
        return view('events.cadastrar');
    }
    public function store(Request $request){
        $user = new Users;
        $user->name = $request->txt_nome_usuario;
        $user->email = $request->txt_email_usuario;
        $user->password = hash('sha512',$request->txt_senha_usuario);
        $user->tipo = $request->txt_tipo_usuario;
        $user->save();

        return redirect("/user/$user->id")->with('msg','Cadastrado com Sucesso');
    }

    // public function show($id){
    //     return view('events.cadastrar');
    // }
}
