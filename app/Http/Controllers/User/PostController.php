<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница постов';
    }

    public function create()
    {
        return 'Страница постов';
    }

    public function store($post)
    {
        return "Страница постов {$post}";
    }

    public function show($post)
    {
        return "Страница постов $post";
    }

    public function edit($post)
    {
        return "Страница постов $post";
    }
    public function update($post)
    {
        return "Страница постов $post";
    }
    public function destroy($post)
    {
        return "Страница постов $post";
    }
    public function like($post)
    {
        return "Страница постов $post";
    }
}
