<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index():void
    {
        $title = 'Page d’accueil';

        view('home', compact('title'));
    }
}

