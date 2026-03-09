<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index()
    {
        return 'Bienvenu sur la page d’accueil';
    }
}