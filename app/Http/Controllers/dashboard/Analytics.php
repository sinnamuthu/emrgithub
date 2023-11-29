<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Appointment;
use App\Models\Users;
use App\Models\Doctor;
use App\Models\Observ;
use App\Models\Emr;
use App\Models\Note;
use App\Models\Plan;
use App\Models\Lab;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class Analytics extends Controller
{
  protected $profile;
  protected $users;
  protected $appointment;
  protected $observ;
  protected $note;
  protected $plan;
  protected $emr;

  public function __construct(){
    $this->profile = new Profile();
    $this->users = new Users();
    $this->doctor = new Doctor();
    $this->appointment = new Appointment();
    $this->observ = new Observ();
    $this->note = new Note();
    $this->emr = new Emr();
    $this->plan = new Plan();
 }

  public function index()
  {
            //admin can only enter this menu normal user cannot enter
                    if(Auth::user()->type == 'Super Admin')
                    {
                      $check = 0;
                      $response['profile'] = $this->profile->all();
                      $response['profileCount'] = $this->profile->count();
                      $response['userscount'] = $this->users->where('branch', '!=' ,$check)->count();
                      
                       return view('content.dashboard.dashboard-superadmin')->with($response);
                    }
                    else
                    {
                       $currentDate = date('Y-m-d');
                      $branch = Auth::user()->branch;
                      $response['profile'] = Profile::where('id', '=', $branch)->get();
                      $response['appointment'] = Appointment::where('branch', '=', $branch)->whereDate('date_appointment', $currentDate)->get();
                      //today count
                      $curr_Date = Carbon::now()->toDateString();
                      $response['to_appointment'] = Appointment::where('branch', '=', $branch)->whereDate('date_appointment', $currentDate)->count();
                      $response['to_exam'] = Emr::where('branch', '=', $branch)->whereDate('created_at', $curr_Date)->count();
                      $response['to_observ'] = Observ::where('branch', '=', $branch)->whereDate('created_at', $curr_Date)->count();
                      $response['to_treatments'] = Plan::where('branch', '=', $branch)->whereDate('created_at', $curr_Date)->count();
                      $response['to_clinical'] = Note::where('branch', '=', $branch)->whereDate('created_at', $curr_Date)->count();
                      $response['to_labworks'] = Lab::where('branch', '=', $branch)->whereDate('created_at', $curr_Date)->count();

                      //today count
                      $response['doctorlist'] = Doctor::where('doc_branch', '=', $branch)->get();
                   
                      //count
                      $response['appointmentcount'] = Appointment::where('branch', '=', $branch)->count();
                      $response['treatmentcount'] = Plan::where('branch', '=', $branch)->count();
                      $response['labcount'] = Lab::where('branch', '=', $branch)->count();
                      $response['doctorcount'] = Doctor::where('doc_branch', '=', $branch)->count();
                      $response['vedorcount'] = Appointment::where('branch', '=', $branch)->count();
                      $response['paymentcount'] = Appointment::where('branch', '=', $branch)->count();
                       //count


                      //end examination
                      $response['examination'] = Emr::where('branch', '=', $branch)->get();
                      $response['observ'] = Observ::where('branch', '=', $branch)->get();
                      $response['note'] = Note::where('branch', '=', $branch)->get();
                      $response['plan'] = Plan::where('branch', '=', $branch)->get();
                      //end examination
                      return view('content.dashboard.dashboards-analytics')->with($response);
                    }
  }

  public function super()
  {            
    $check = 0;
    $response['profile'] = $this->profile->all();
    $response['profileCount'] = $this->profile->count();
    $response['userscount'] = $this->users->where('branch', '!=' ,$check)->count();
    
    return view('content.dashboard.dashboard-superadmin')->with($response);
  }
}
