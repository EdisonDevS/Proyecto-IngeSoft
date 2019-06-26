<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Conyugue;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/change_profile_picture';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Array $data)
    {

        $conyuge1=Conyugue::create([
            'document'=>$data['document1'],
            'name'=>$data['name1'],
            'last_name'=>$data['last_name1'],
            'gender'=>$data['gender1'],
        ]);

        $conyuge2=Conyugue::create([
            'document'=>$data['document2'],
            'name'=>$data['name2'],
            'last_name'=>$data['last_name2'],
            'gender'=>$data['gender2'],
        ]);

        $user=User::create([
            'phone' => $data['phone'],
            'email' => $data['email'],
            'budget' => $data['budget'],
            'password' => Hash::make($data['password']),
        ]);

        $user->conyugues()->save($conyuge1);
        $user->conyugues()->save($conyuge2);

        return $user;
    }
}
