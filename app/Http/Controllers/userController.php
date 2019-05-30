<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;

use Auth;
use Carbon\Carbon;


class userController extends Controller
{
  public function showAddUser()
   { 
   	return view('pages.users.add');
   }


    public function handleAddUser(){
    
	$data=Input::all();
	
	User::create([
		'firstName'=>$data['firstName'],
		'lastName'=>$data['lastName'],
		'address'=>$data['address'],
		'phone'=>$data['phone'],
		'email'=>$data['email'],
		'password'=>bcrypt($data['password']),
		'role_id'=>2
	]);
      	redirect(route('showCarsList'));
}


 public function showUserLogin()
   { 
   	return view('pages.users.login');
   }


    public function handleUserLogin(){
    
$data=Input::all();


	$cred=[ 'email'=>$data['email'],
			'password'=>$data['password']
	];
		if(Auth::attempt($cred)){

			return view('pages.home');
		}
		

		return redirect()->back();
}
}
