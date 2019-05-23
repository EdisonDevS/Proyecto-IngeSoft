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

        return view('admin.manage_admin.exito_al_crear');
    }   


    public function showAdminSearchForm()
    {
        $admins=\App\Administrator::all();

        return view('admin.manage_admin.search',compact('admins'));
    }

    public function showAdminModifyForm()
    {
        return view('admin.manage_admin.modify');
    }

    public function showAdminDeleteForm()
    {
        return view('admin.manage_admin.delete');
    }


    public function showUserManagement()
    {
    	return view('admin.manage_user.manage');
    }
}
