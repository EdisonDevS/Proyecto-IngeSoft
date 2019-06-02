<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Administrator;
use \App\User;

class AdminController extends Controller
{

	public function __constuct()
	{
		$this->middleware('auth:admin');
	}


    public function createAdmin(Request $request)
    {
        \App\Administrator::create([
            'name'=>$request['name'],
            'last_name'=>$request['last_name'],
            'document'=>$request['document'],
            'birth_date'=>$request['birth_date'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'phone'=>$request['phone']
        ]);

        return view('admin.manage_admin.exito_al_crear');
    }   


    public function showAdminSearchForm()
    {
        $admins= Administrator::all();
        return view('admin.manage_admin.search',compact('admins'));
    }


    public function showAdminDeleteForm($id)
    {
        $admin= Administrator::find($id);
        return view('admin.manage_admin.delete', compact('admin'));
    }


    public function deleteAdmin($id)
    {
        Administrator::destroy($id);
        return redirect(route('admin.manage.buscar_admin'));
    }

    public function showAdminModifyForm($id)
    {
        $admin=Administrator::find($id);
        return view('admin.manage_admin.modify', compact('admin'));
    }


    public function modifyAdmin(Request $request)
    {
        $admin=Administrator::find($request['id']);
        
        $admin->name=$request['name'];
        $admin->last_name=$request['last_name'];
        $admin->phone=$request['phone'];
        $admin->email=$request['email'];

        $admin->save();

        return redirect(route('admin.manage.buscar_admin'));

    }


    public function searchUsers(Request $request)
    {
        $users=User::where('name',$request['name'])->paginate();
        return view('admin.manage_user.manage', compact('users'));
    }

}
