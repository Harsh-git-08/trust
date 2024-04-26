<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Add more validation rules as needed
        ]);

        $submission = new FormSubmission();
        $submission->name = $validatedData['name'];
        $submission->lastname = $request['lastname'];
        $submission->email = $validatedData['email'];
        $submission->phone = $request['phone'];
        $submission->message = $request['message'];
        $submission->certificate_url = $request->input('xxTrustedFormCertUrl');
        $submission->save();

        // Notify the user
        return redirect()->route('contact')->with('success', 'Form submitted successfully!');
    }

    public function show(){
        $data =  FormSubmission::all();

        return view('admin.data', compact('data'));
    }
    public function destroy($id){
        $data = FormSubmission::find($id);
        $data->delete();
        return redirect('admin/data');
    }
}
