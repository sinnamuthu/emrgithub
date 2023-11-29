<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ClinicsController extends Controller
{
   
    protected $profile;

    public function __construct(){
       $this->profile = new Profile();
    }




   public function index()
   {
       // Normal and Admin can also use this menu
       $response['profile'] = $this->profile->all();

       $response['lastid'] = Profile::latest('id')->first()->id + 1;
      
       return view('content.clinics.clinics')->with($response);

   }

  

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    //    $this->appointment->create($request->all());
    //    return redirect()->back();
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

    $input = $request->all();

    

    $imageName = time().'.'.$request->image->extension();

     $request->image->move(public_path('hospital_logo'), $imageName);

     $input['image'] = $imageName;


    $this->profile->create($input);

       session()->flash('success', 'Profile Created successfully.');
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
   public function edit(Doctor $doctor)
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
   public function update(Request $request, Doctor $doctor)
   {


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
