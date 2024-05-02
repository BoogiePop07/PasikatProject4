<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpBusinessController extends Controller
{
    public function handleSignup(Request $request)
    {
        // Handle the form submission here
        // You can access the form data using $request->all()
        // You can also access the uploaded files using $request->file('files')

        // For example, you can store the uploaded files in the public/uploads directory
        $files = $request->file('files');
        foreach ($files as $file) {
            $file->storeAs('public/uploads', $file->getClientOriginalName());
        }

        // Return a success message or redirect to a success page
        return redirect()->route('home')->with('success', 'Signup successful!');
    }
}
