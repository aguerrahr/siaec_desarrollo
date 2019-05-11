<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePlanController extends Controller
{
    //
    public function __invoke()
    {
    	return 'Esta es la pagina inicial del catálogo Planes de Estudio';
    }
}
