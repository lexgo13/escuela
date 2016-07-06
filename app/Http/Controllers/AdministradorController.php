<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministradorController extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = 'administradores.login';
    protected $guard = 'admin';


    public  function authenticated(){
        return redirect('adminprincipal');
    }

}
