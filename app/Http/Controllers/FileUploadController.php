<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,pdf,doc,docx|max:2048', // Adjust the allowed file types and maximum file size as needed
        ]);

        // Store the uploaded file in the storage directory
        $filePath = $request->file('file')->store('uploads');

        // Optionally, you can store the file path in the database or perform other actions

        // Redirect back with a success message
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
