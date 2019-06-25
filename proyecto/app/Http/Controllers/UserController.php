<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Conyugue;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function modifyUser(Request $request)
	{
		$conyugue=Conyugue::find($request['id']);
		
		$conyugue->name=$request['name'];
		$conyugue->last_name=$request['last_name'];
		$conyugue->document=$request['document'];
		$conyugue->gender=$request['gender'];

		$conyugue->save();

		return redirect(route('admin.manage.users'));
	}

	public function profile()
	{
		return view('users.profile');
	}
}
