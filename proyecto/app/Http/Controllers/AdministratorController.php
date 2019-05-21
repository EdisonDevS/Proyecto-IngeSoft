<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admins';

    public function showLoginForm(){
    	return view('administrators.login');
    }

    public function authenticated(){
    	return redirect('admin/area');
    }

    public function showAdminArea(){
    	return view('administrators.area');
    }
}
