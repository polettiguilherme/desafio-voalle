<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class DetalhesController extends Controller
{
    public function detalhe(Users $p)
    {
        return view('detalhes', ['p' => $p, 'page' => 'detalhes']);
    }

    public function remover(Users $p)
    {
        return view('excluir', ['p' => $p, 'page' => 'excluir']);
    }

    public function deletar(Users $p) 
    {
        $p->delete();
        
        return redirect()->route('index');   
    }
}
