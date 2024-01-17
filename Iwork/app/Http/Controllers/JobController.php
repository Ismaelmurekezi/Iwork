<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {


        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;
            if ($usertype == 0) {

                // return view('jobpost.index');
                //   dd($jobs);
                return view('job.index', [
                    'jobs' => Job::latest()->filter(request(['tag', 'search']))->SimplePaginate(8)
                ]);
            } else if ($usertype == 1) {

                return view('dashboard', [
                    'jobs' =>  Job::latest()->filter(request(['tag', 'search']))->SimplePaginate(5)
                ]);
            } else if ($usertype == 2) {

                return view('employerdashboard', [
                    'jobs' =>  Job::latest()->filter(request(['tag', 'search']))->SimplePaginate(5)
                ]);
            } else {
                return redirect()->back();
            }
        }



        return view('job.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->SimplePaginate(8)
        ]);
    }
    public function show(Job $job)
    {
        return view('job.show', [
            'job' => $job

        ]);
    }
    public function create()
    {
        return view('job.create');
    }
    public function store(Request $request)
    {
        // dd($request->file('logo'));
        $formFields = $request->validate(
            [
                'title' => 'required',
                'company' => ['required', Rule::unique('jobs', 'company')],
                'status' => 'required',
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'


            ]
        );

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //getting id of user who is currently logged in 
        $formFields['user_id'] = auth()->id();

        //creating data in database
        Job::create($formFields);

        return redirect('/')->with('successMessage', 'Job created successfully!');
    }

    //show edit form

    public function edit(Job $job)
    {
        return view('job.edit', ['job' => $job]);
    }


    // updating form controller

    public function update(Request $request, Job $job)
    {
        //Make sure logged in user is owner who can delete job

        if ($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate(
            [
                'title' => 'required',
                'company' => ['required'],
                'status' => 'required',
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'

            ]
        );

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($formFields);

        return back()->with('successMessage', 'Job updated successfully!');
    }

    //Delete listing
    public function destroy(Job $job)
    {


        if ($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }


        $job->delete();
        return redirect('/')->with('ErrorMessage', "Job is Deleted");
    }





    public function alljobs()
    {
        return view('job.alljobs', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->SimplePaginate(8)
        ]);
    }




    public function dashboard()
    {
        return view('dashboard', [
            'jobs' =>  Job::latest()->filter(request(['tag', 'search']))->paginate(5)
        ]);
    }

    public function employerdashboard()
    {

        return view('employerdashboard', [
            'jobs' =>  Job::latest()->filter(request(['tag', 'search']))->paginate(5)
        ]);
    }

    public function employers()
    {

        return view('Users.employers', [
            'jobs' =>  Job::latest()->filter(request(['tag', 'search']))->paginate(5)
        ]);
    }
}
