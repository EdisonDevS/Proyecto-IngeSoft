<?php

namespace App\Http\Controllers;
use \App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function modifyUser(Request $request)
    {
    	$user=User::find($request['id']);
    	
    	$user->name=$request['name'];
    	$user->last_name=$request['last_name'];
    	$user->phone=$request['phone'];
    	$user->email=$request['email'];

    	$user->save();

    	return redirect(route('admin.manage.users'));
    }
}
