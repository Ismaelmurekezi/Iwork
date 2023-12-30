<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index(){
    

        return view('job.index',[
            'jobs'=>Job::latest()->filter(request(['tag','search']))->SimplePaginate(8)
            ]);
    }
    public function show(Job $job){
        return view('job.show',[
            'job'=>$job
    
        ]);

    }
    public function create(){
        return view('job.create');
    }
    public function store(Request $request){
        // dd($request->file('logo'));
      $formFields=$request->validate(
        [
            'title'=>'required',
            'company'=>['required', Rule::unique('jobs','company')],
            'status'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required' 
            
        ]);

if($request->hasFile('logo')){
    $formFields['logo']=$request->file('logo')->store('logos','public');
}

//getting id of user who is currently logged in 
$formFields['user_id']= auth()->id();

//creating data in database
        Job::create( $formFields);

        return redirect('/')->with('message','Listing created successfully!');
    }

    //show edit form

    public function edit(Job $job){
        return view('job.edit',['job'=>$job]);
    }
  

// updating form controller

    public function update(Request $request, Job $job){

      $formFields=$request->validate(
        [
            'title'=>'required',
            'company'=>['required'],
            'status'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required' 
            
        ]);

if($request->hasFile('logo')){
    $formFields['logo']=$request->file('logo')->store('logos','public');
}

        $job->update( $formFields);

        return back()->with('message','Listing updated successfully!');
    }

    //Delete listing
    public function destroy(Job $job){
        $job->delete();
        return redirect('/')->with('message',"Listing deleted successfully");
    }

    public function alljobs() {
        return view('job.alljobs', [
            'jobs' => Job::latest()->filter(request(['tag','search']))->SimplePaginate(6)
        ]);
    }
    public function dashboard(){
        return view('dashboard', [
            'jobs' =>  Job::latest()->filter(request(['tag','search']))->paginate(5)]);
    }

}
