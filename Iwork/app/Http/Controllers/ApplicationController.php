<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('application.index', [
            'applications' => Application::all()
        ]);
    }
    public function show(Application $application)
    {
        return view('application.show', [
            'application' => $application

        ]);
    }


    public function create()
    {
        return view('application.create');
    }
    //store controller
    public function store(Request $request)
    {
        $formdata = $request->validate([
            'empname' => 'required',
            'age' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'skills' => 'required',
            'telephone' => 'required'
        ]);

        Application::create($formdata);

        return redirect('/');
    }
    public function edit(Application $application)
    {
        return view('application.edit', ['application' => $application]);
    }


    public function update(Request $request, Application $application)
    {

        $formFields = $request->validate(
            [
                'empname' => 'required',
                'age' => ['required'],
                'location' => 'required',
                'email' => ['required', 'email'],
                'skills' => 'required',
                'telephone' => 'required',



            ]
        );

        // if ($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        $application->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return redirect('/')->with('message', "Listing deleted successfully");
    }
}
