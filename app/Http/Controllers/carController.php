<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Car;
use App\Mark;

use Image;
use Auth;
use Carbon\Carbon;

class carController extends Controller
{

	public function showCarsList()
   { 
  	$cars=Car::all();
  
   	return view ('pages.cars.list',['cars'=>$cars]);
   } 

	public function showAddCar()
   { 
   	$marks=Mark::all();
   	return view('pages.cars.add',['marks'=>$marks]);
   }



   public function handleAddCar(){
	$data=Input::all();
	$photo = 'photo-' . str_random(5) . time() . '.' . $data['photo']->getClientOriginalExtension();
            $fullImagePath = public_path('storage/car/' . $photo);
            Image::make($data['photo']->getRealPath())->resize(540,320)->save($fullImagePath);
            $photoPath = 'storage/car/' . $photo;
	Car::create([
		
		'model'=>$data['model'],
		'people'=>$data['people'],
		'doors'=>$data['doors'],
		'mileage'=>$data['mileage'],
		'price'=>$data['price'],
		'transmission'=>$data['transmission'],
		'photo'=>$photoPath,
		'mark_id'=>$data['mark']
	]);
	return redirect(route('showCarsList'));
		

	
	
	}

	public function showAddMark()
   { 
   	return view('/pages.cars.addMark');
   }



   public function handleAddMark(){
	$data=Input::all();
	
	Mark::create([
		'name'=>$data['name']
	]);
	return redirect(route('showCarsList'));
		

	
	
	}
}
