<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{

     protected $appointment;
     protected $doctor;
     protected $profile;

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

       // $response['appointment'] = $this->appointment->all();
        $response['doctorlist'] = Doctor::where('doc_branch', '=', $branch)->get();

        return view('content.appointment.appointment')->with($response);

    }

    public function appdata()
    {
        $branch = Auth::user()->branch;

        //$appdatas = $this->appointment->all();

        $appdatas = Appointment::where('branch', '=', $branch)->get();

        $formatted = [];
        foreach ($appdatas as $appdata) {
            $formatted[] = [
                'id' => $appdata->title,
                'title' => $appdata->firstname.' '.$appdata->lastname,
                'start' => $appdata->date_appointment,
                'end' => $appdata->date_appointment,
                'status' => $appdata->title,
            ];
        }

        // $data = [
        //     [
        //         'id' => '1',
        //         'title' => 'fdsafdsa',
        //         'start' => '2023-10-03 00:00:00',
        //         'end' => '2023-10-04 00:00:00',
        //         'status' => '1',
        //     ]
        // ];
        
        $jsonData = json_encode($formatted);
        
        echo $jsonData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->appointment->create($request->all());
        session()->flash('success', 'Appointment Booked successfully.');
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
        session()->flash('success', 'Appointment Booked successfully.');
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
