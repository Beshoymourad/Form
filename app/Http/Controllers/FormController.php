<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

     public function submit(Request $request)
    {
        // Handle the form submission logic here

        // Access form data from the request
        $NAME = $request->input('NAME');
        $EMAIL = $request->input('EMAIL');
        $CONTACT_NO = $request->input('CONTACT_NO');
        $MESSAGE = $request->input('MESSAGE');

        // Perform necessary operations with the form data (e.g., save to database, send email, etc.)

        // Redirect the user after form submission
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    public function success()
    {
        return view('success');
    }

    public function processForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'NAME' => 'required',
            'EMAIL' => 'required|email',
            'CONTACT_NO' => 'required',
            'MESSAGES' => 'required',
        ]);

        // Process the form data (you can save it to the database, send emails, etc.)
        // Example: Saving the form data to a database
        // YourModel::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully!');


    }
}
