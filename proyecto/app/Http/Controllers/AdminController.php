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
    	return view('admin.layout');
    }


    public function showAdminManagement()
    {
    	return view('admin.manage_admin.manage');
    }


    public function showAdminCreateForm()
    {
        return view('admin.manage_admin.create');
    }


    public function createAdmin(Request $request)
    {
        \App\Administrator::create([
            'name'=>$request['name'],
            'last_name'=>$request['last_name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'phone'=>$request['phone']
        ]);

        return 'Administrador registrado con exito';
    }   


    public function showAdminSearchForm()
    {
        return view('admin.manage_admin.search');
    }


    public function showUserManagement()
    {
    	return view('admin.manage_user.manage');
    }
}
