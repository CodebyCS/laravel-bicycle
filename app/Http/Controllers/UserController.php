<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
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

    public function create()
    {
        // Vamos buscar os utilizadores com a relação do país
        $users = User::with('country')->get();

        // Vamos buscar todos os países para o formulário
        $countries = Country::all();

        // Retorna a nova página passando ambas as variáveis
        return view('pages.users.create', [
            'users' => $users,
            'countries' => $countries
        ]);
    }
}
