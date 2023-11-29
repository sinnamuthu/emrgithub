<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;


class ProfileController extends Controller
{

    protected $profile;

    public function __construct(){
       $this->profile = new Profile();
    }


    public function index()
    {
               // admin can only enter this menu normal user cannot enter
                    if(Auth::user()->type == 'Admin')
                    {

                      //  $response['profile'] = $this->appointment->all();
                       // return view('content.profile.profile')->with($response);
                    }
                    else
                    {
                        return redirect()->back();
                    }

    }

    public function store(Request $request)
    {
        $request->validate([
            'hospitalname'=>'required',
            'branchname'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'branch'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'picode'=>'required',
            'country'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:3048'
        ]);

        $input = $request->all();

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('hospital_logo'), $imageName);

        $input['image'] = $imageName;

        $this->profile->create($input);

        session()->flash('success', 'Profile Created Successfully.');

        return back();
    }

    public function edit(Profile $profile)
    {
        $response['profile'][] = $profile;
        return view('content.profile.profile')->with($response);
    }

    public function update(Request $request, Profile $profile)
    {

        $request->validate([
            'hospitalname'=>'required',
            'branchname'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'branch'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'picode'=>'required',
            'country'=>'required'
        ]);

        $input = $request->all();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('hospital_logo'), $imageName);
    
            $input['image'] = $imageName;
        }
        else{
            $input['image'] = $request->image_name;
        }

    
        $profile->update($input);

        session()->flash('success', 'Profile Updated Successfully.');

        return back();
    }
 
}
