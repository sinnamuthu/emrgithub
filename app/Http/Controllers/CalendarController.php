<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CalendarController extends Controller
{
    
    protected $appointment;

    public function __construct(){
       $this->appointment = new Appointment();
       $this->doctor = new Doctor();
       $this->profile = new Profile();
    }



   public function index()
   {
       //admin can only enter this menu normal user cannot enter
                   // if(Auth::user()->type == 'Admin')
                   // {
                   //     $response['appointment'] = $this->appointment->all();
                   //     return view('content.appointment.appointment')->with($response);
                   // }
                   // else
                   // {
                   //     return redirect()->back();
                   // }
       
       // Normal and Admin can also use this menu
       $branch = Auth::user()->branch;
       $response['profile'] = Profile::where('id', '=', $branch)->get();
       $response['appointment'] = Appointment::where('branch', '=', $branch)->get();
       $response['doctor'] = $this->appointment->distinct()->pluck('choose_doctor');
       $response['doctorlist'] = $this->doctor->all();
 

       return view('content.calendar.calendar')->with($response);

   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $this->appointment->create($request->all());
       return redirect()->back();
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->appointment->create($request->all());
       return redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
   }
}
