<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;

class UsersController extends Controller
{
    public function create()
    {
        return view('cadastro', ['page' => 'cadastro']);
    }
     
    public function insert(FieldRequest $form)
    {

        $validated = $form->validated();

        $user = new Users();

        $user->name = $form->name;
        $user->cpf = $form->cpf;
        $user->email = $form->email;
        $user->funcao = $form->funcao;
        $user->status = $form->radio;

        $user->save();

        return redirect()->route('index');
    }
}
