<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function __constuct()
	{
		$this->middleware('auth:admin');
	}

    public function showAdminDashboard()
    {
    	return view('admin.dashboard');
    }
}
