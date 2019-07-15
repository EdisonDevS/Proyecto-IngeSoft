<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Conyugue;
use \App\Lugar;
use Intervention\Image\Facades\Image as Image;
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

	public function profileModify(Request $data)
	{
		$user=User::find($data['id']);
		$conyuge1=$user->conyugues[0];
		$conyuge2=$user->conyugues[1];

		$conyuge1->document=$data['document1'];
        $conyuge1->name=$data['name1'];
        $conyuge1->last_name=$data['last_name1'];
        $conyuge1->gender=$data['gender1'];

        $conyuge2->document=$data['document2'];
        $conyuge2->name=$data['name2'];
        $conyuge2->last_name=$data['last_name2'];
        $conyuge2->gender=$data['gender2'];

        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->budget = $data['budget'];

        $user->save();
        $user->conyugues()->save($conyuge1);
        $user->conyugues()->save($conyuge2);

        return redirect(route('profile'));
	}


	public function changeProfilePicture(Request $request)
	{
		$this->validate($request, [
			'photo'=>'required|image'
		]);

		$user=User::find($request['id']);

		$photo_name='images/users/'.$user->id.'.'.$request->file('photo')->getClientOriginalExtension();

        Image::make($request->file('photo'))->resize(255,255)->save(public_path($photo_name));

        $user->photo=$photo_name;
        $user->save();

        return redirect('/');
	}

	public function mostrarlunamiellugar()
	{
		$lunademiel = Lugar::where('type', 'LunaDeMiel')->get();
		return view('categoria.lunamiel', compact('lunademiel'));
	}
}
