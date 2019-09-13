<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Car;
use App\Mark;
use App\User;
use App\Booking;


use Image;
use Auth;
use Carbon\Carbon;
use Session;
use Validator;
use Mail;

class bookingController extends Controller
{
   
	
   	public function showAbout()
   { 
   	return view('pages.about');
   }


   public function showService()
   { 
   	$nbCars=Car::count();
   	$nbBookings=Booking::whereStatus('confirm')->count();
   	$nbClients=User::whereRole_id(2)->count();
  
   	return view('pages.service',['nbCars'=>$nbCars,'nbBookings'=>$nbBookings,'nbClients'=>$nbClients]);
   }


    public function showHome()
   { 
   	$cars=Car::take(5)->get();
   	$marks=Mark::all();

   	return view('pages.home',['marks'=>$marks],['cars'=>$cars]);
   }



    public function handleSearchCars()
    {
	     $data=Input::all();

       $rules=[
        'pickUp'   => 'required|date|date_format:Y-m-d|after:today| before:today + 3 months',
        'dropOff'  => 'required|date|date_format:Y-m-d|after:pickUp'
        ];
  $messages=[
    'pickUp.required' =>  'Required date of pickUp!',
    'pickUp.before '  =>  'Booking are open 3 months in advance, according to availability.',
    'dropOff.required'=>  'Required date of dropOff !',
   
   ];

     $validation =Validator::make($data,$rules,$messages);
         if( $validation->fails()){
            return redirect()->back()->withErrors($validation->errors());
           }

	$cars=Car::whereHas('bookings', function($q)use($data){

   		 $q->where('status', '<>', 'confirm');
    	 $q->orWhere('status', '=', 'confirm')->where('dropOff', '<=',$data['pickUp'])->orWhere('pickUp', '>=',$data['dropOff']);
       })->orDoesntHave('bookings')->get();
 
		return view('pages.cars.search',['cars'=>$cars,'pickUp'=>$data['pickUp'],'dropOff'=>$data['dropOff']]);
		}





    public function showBookingCar($id,$pickUp,$dropOff)
    {
    	 if(Auth::user()){
    		  $car=Car::find($id);

        	if($car){	
              return view('pages.cars.booking',['car'=>$car,'pickUp'=>$pickUp,'dropOff'=>$dropOff]);
         }
 	        else {
 	 	          alert()->warning('error id car! ', 'Warning');
 	 	          return redirect(route('home'));
 	        }
 	     }

       else{ Session::put(['msg'=>'Please connect for booking']);
     	 	return view('pages.users.login');
       }
 	
}


public function handleBookingCar($id,$pickUp,$dropOff)
{
	 $car=Car::find($id);

 	  if($car){	
      	Booking::create([
	         	'status'  =>  'wait',
	         	'pickUp'  =>   $pickUp,
	         	'dropOff' =>   $dropOff,
		        'car_id'  =>   $id,
		        'user_id' =>   Auth::user()->id	
	       ]);

	       alert()->info('Our customer ' . Auth::user()->firstName .' ,You will receive an email confirmation message to confirm your booking.')->autoclose(6000); 
	       return redirect(route('home'));

   }
 	return 'erreur id car';
}


  public function showCheckBooking()
  {
     $bookings=Booking::whereStatus('wait')->orderBy('pickUp')->get();
    
		 return view('pages.admin.check',['bookings'=>$bookings]);
  }

   public function showHistoryBooking()
  {
     $bookings=Booking::all();
    
     return view('pages.admin.history',['bookings'=>$bookings]);
  }


 public function showBookingsList()
 {
 	$idUser=Auth::user()->id;
  
  $bookings=Booking::whereUser_id($idUser)->orderBy('pickUp')->get();

	return view('pages.users.list',['bookings'=>$bookings]);
}


public function handleBookingConfirm($id)
{

	 $booking=Booking::find($id);

   $bookingExists =Booking::where('status','=','confirm')
          ->where('car_id','=',$booking->car_id)
          ->where(function($q) use($booking) {
             $q->whereBetween('pickUp',[$booking->pickUp,$booking->dropOff])
               ->orWhereBetween('dropOff',[$booking->pickUp,$booking->dropOff]);
           })->exists();

  if($bookingExists){
       alert()->warning('Another booking recorded in same period with this car .. It will be must to refuse this one','Warning')->autoclose(6000);
       return redirect()->back(); 

    }
    else{
		$booking->status='confirm';
		$booking->save();

    Mail::send('pages.admin.confirmMail',['name','Contact'],function($message) use($booking){       
       $message->to($booking->user->email,$booking->user->firstName)->subject('ConfirmBooking');
       $message->from('intissar.klach.hajjaj@gmail.com','admin');
      });

    alert()->success('booking confirmed','success')->autoclose(6000);
	  return redirect()->back();
}
}



public function handleBookingRefuse($id)
{

   $booking=Booking::find($id);
   if($booking){ 
         $booking->status='refus';
         $booking->save();

  alert()->success('booking refused','success')->autoclose(6000);
  return redirect()->back();
}

  return 'erreur id booking';
}



public function handleBookingClear($id)
{

   $booking=Booking::find($id);

    if($booking){ 
         $booking->delete();
         alert()->success('booking cleared','success')->autoclose(6000);
         return redirect()->back();
}
  return 'erreur id booking';
}


public function showPaymentBooking()
{
    return view('pages.users.payement');
}


}
