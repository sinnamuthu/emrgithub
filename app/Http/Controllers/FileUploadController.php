<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function index()
    {
        return view('content.upload.fileupload');
    }

    public function upload(Request $request)
    {
        // Handle file upload logic here
        // Access files using $request->file('file') and store/save them

        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:3048', // Example validation rules
        ]);
    
        // Get the file from the request
        $file = $request->file('file');

        $destinationPath = public_path('uploads');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
    

       // $path = $file->store('uploads'); // This will store the file in the storage/app/uploads directory
    
        // You can save the file path in the database or perform other actions
        // For example: YourModel::create(['file_path' => $path]);

        
    
        return response()->json(['success' => 'File uploaded successfully.']);

    }
}
