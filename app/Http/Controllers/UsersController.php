<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
   
    protected $profile;
    protected $users;


    public function __construct(){
       $this->profile = new Profile();
       $this->users = new Users();
    }




   public function index()
   {

    $notbranch = 0 ;
       // Normal and Admin can also use this menu
       $response['profile'] = $this->profile->all();

       $response['lastid'] = Profile::latest('id')->first()->id + 1;



    //    $response['user'] = Users::where('branch', '!=', $notbranch)->get();

       $response['user'] = Users::join('profile', 'users.branch', '=', 'profile.id')->where('users.branch', '!=', $notbranch)->select('users.*', 'profile.hospitalname as host_name')->get();
      
       return view('content.user.user')->with($response);

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

    // // Hash the password before saving it to the database
    $request['password'] = Hash::make($request->password);

   $this->users->create($request->all());

       session()->flash('success', 'Users Created successfully.');
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
