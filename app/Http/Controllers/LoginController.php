<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function store() {
        return "Запрос на вход";
    }
}
