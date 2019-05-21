<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminLoginController extends Controller
{
	 use AuthenticatesUsers;

	public function __contruct()
	{
		$this->middleware('guest:admin',['except'=>['logout']]);
	}

    public function showLoginForm()
    {
    	return view('auth.admin_login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'email'=>'required|email',
    		'password'=>'required|min:8'
    	]);

    	if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password]
    		,$request->remember))
    	{
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	return back()->withErrors(['email'=>'E-mail o contraseña incorrecta']);
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect(route('admin.login'));
    }


}
