<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {    
        $pessoas = Users::orderBy('id', 'asc')->get();
        return view('index', ['pessoas' => $pessoas,'page' => 'index']);
    }
}
