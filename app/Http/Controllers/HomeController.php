<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $rol = $user->roles->implode('name',',');
        //dd($user);
        switch ($rol) {
            case 'administracion':               
                return view('welcome');
                break;
            case 'super-usuario':                        
                return view('welcome');
                break;
            default:                
                return 'No existe seguridad';
                break;
        }
        
    }
}
