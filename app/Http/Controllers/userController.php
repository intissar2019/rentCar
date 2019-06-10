<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;

use Auth;
use Carbon\Carbon;
use Mail;
use Validator;


class userController extends Controller
{

    public function showAddUser()
     { 
    	return view('pages.users.add');
     }


    public function handleAddUser()
    {
	$data=Input::all();

	$rules=[
		'firstName'=>'required',
		'lastName' =>'required',
		'email'    =>'required|email|unique',
		'phone'    =>'required|numeric',
		'password' =>'required|min:8'
	];

	$messages=[
		'firstName.required'=>'firstName is required !',
		'firstName.required'=>'firstName is required !',
		'email.email       '=>'mail invalid !'
	 ];

	$validation =Validator::make($data,$rules,$messages);
		if( $validation->fails()){
			return redirect()->back()->withErrors($validation->errors());
		}
	
	User::create([
		'firstName'	=>	$data['firstName'],
		'lastName'	=>	$data['lastName'],
		'address'	=>	$data['address'],
		'phone'		=>	$data['phone'],
		'email'		=>	$data['email'],
		'password'	=>	bcrypt($data['password']),
		'role_id'	=>	2
	]);

		alert()->success('Thank you for your trust in our company. ', 'success SIGN UP')
		       ->autoclose(4000);
      	 return redirect(route('showCarsList'));
}


public function showUpdateUser()
   { 
   	 if(Auth::user()){
   	    return view('pages.users.update');
    }

   else{
   	alert()->error('not user found','Error');
   	return redirect(route('home'));
   }
}



    public function handleUpdateUser()
    {
	$data=Input::all();
	$rules=[
		'email'    =>'required|email|unique',
		'phone'    =>'required|numeric',
		'password' =>'required|min:8'
	];

	$messages=[
		'phone.required'=>'the number phone is required !',
		'email.email       '=>'mail invalid !'
	 ];

	$validation =Validator::make($data,$rules,$messages);
		if( $validation->fails()){
			return redirect()->back()->withErrors($validation->errors());
		}

	$user=Auth::user();
	
 	if($user){

		$user->email   =	$data['email'];
		$user->phone   =	$data['phone'];
		$user->address =	$data['address'];
		$user->password=    bcrypt($data['password']);
	    $user->save();
	      
		alert()->success(' your account is updating', 'SUCCESS')
			   ->autoclose(6000);
      	 return redirect(route('home'));
	}
	else return back();
}


 public function showUserLogin()
   { 
   	return view('pages.users.login');
   }


    public function handleUserLogin()
    {
		$data=Input::all();

	  $cred=[ 'email'	=>	$data['email'],
			'password'	=>	$data['password']
	        ];

		if(Auth::attempt($cred)){
			return redirect(route('home'));
		}

		alert()->error('Incorrect mail and/or password.')
		       ->persistent('TRY AGAIN');

		return redirect()->back();
}



 public function handleUserLogout()
 {
		Auth::logout();
		return redirect(route('home'));
	
}



public function showContact()
   { 
   	return view('pages.contact');
   }

public function handleContact()
{
		$data=Input::all();
		$rules=[
		'name'     =>	'required',
		'email'    =>	'required|email',
		'message'  =>	'required|min:20'
	 ];

	$messages=[
		'name.required'	=>	'Name is required !',
	];

	$validation =Validator::make($data,$rules,$messages);

	if( $validation->fails()){
		return redirect()->back()->withErrors($validation->errors());
	}

  	 Mail::send([],[],function($message) use($data){       
       $message->to('intissar.klach.hajjaj@gmail.com','admin rentCar')
       		   ->subject($data['subject'])
       		   ->setBody($data['message']); 

       $message->from($data['email'],$data['name']);
      });

   		alert()->success('thank you for the confidence' ,'success ')
   			   ->autoclose(6000);

   return redirect(route('home'));
}
}
