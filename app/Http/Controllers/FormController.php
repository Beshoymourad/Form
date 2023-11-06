<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }



    public function submit(Request $request)
    {

        $NAME = $request->input('NAME');
        $EMAIL = $request->input('EMAIL');
        $CONTACT_NO = $request->input('CONTACT_NO');
        $MESSAGE = $request->input('MESSAGE');


        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    public function success()
    {
        return view('success');
    }

    public function processForm(Request $request)
    {

        $validatedData = $request->validate([
            'NAME' => 'required',
            'EMAIL' => 'required|email',
            'CONTACT_NO' => 'required',
            'MESSAGE' => 'required',
        ]);


        $NAME = $request->input('NAME');
        $EMAIL = $request->input('EMAIL');
        $CONTACT_NO = $request->input('CONTACT_NO');
        $MESSAGE = $request->input('MESSAGE');


       $formData= FormData::create([
            'NAME' => $NAME,
            'EMAIL' => $EMAIL,
            'CONTACT_NO' => $CONTACT_NO,
            'MESSAGE' => $MESSAGE,

        ]);
        dd($formData);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function getFormData()
    {
        $formData = FormData::all();

        return view('submissions', ['formData' => $formData]);
    }

    public function deleteForm($id)
    {

        $formData = FormData::find($id);

        if ($formData) {

            $formData->delete();

            return redirect()->back()->with('success', 'Form data deleted successfully!');
        }

        return redirect()->back()->with('error', 'Form data not found.');
    }

}
