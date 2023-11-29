<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Emr;
use App\Models\Observ;
use App\Models\Lab;
use App\Models\Plan;
use App\Models\Note;

class EmrController extends Controller
{

    protected $appointment;
    protected $observ;
    protected $lab;
    protected $emr;
    protected $note;
    protected $plan;

    public function __construct(){
       $this->appointment = new Appointment();
       $this->emr = new Emr();
       $this->observ = new Observ();
       $this->lab = new Lab();
       $this->plan = new Plan();
       $this->note = new Note();
    }



   public function index()
   {
       $response['appointment'] = $this->appointment->all();
       return view('content.appointment.appointment')->with($response);
       // return view('content.appointment.appointment');
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


   public function appdata(Request $request)
   {

    $this->emr->create($request->all());
    session()->flash('success', 'EMR Created successfully.');
    return redirect()->back();
   }

   public function observ(Request $request)
   {

    $this->observ->create($request->all());
    session()->flash('success', 'Observation Entered Successfully.');
    return redirect()->back();
   }

   public function lab(Request $request)
   {

    $this->lab->create($request->all());
    session()->flash('success', 'Lab Created Successfully.');
    return redirect()->back();
   }


   public function plan(Request $request)
   {
    $this->plan->create($request->all());
    session()->flash('success', 'Plan Created Successfully.');
    return redirect()->back();
   }


   public function note(Request $request)
   {

    $this->note->create($request->all());
    session()->flash('success', 'Note Created Successfully.');
    return redirect()->back();
   }

   
}
