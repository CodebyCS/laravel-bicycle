<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Vai buscar todos os users carregando também a relação com o country
        $users = User::with('country')->get();

        // Retorna a view na pasta 'pages/users/index.blade.php
        return view('pages.users.index', ['users' => $users]);
    }
}
