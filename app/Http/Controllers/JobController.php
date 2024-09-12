<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index() {
        return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(3) 
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function show(Job $job) {
   return view('jobs.show', ['job' => $job]);

    }

    public function store() {
            request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->send(new JobPosted($job));
        
        return redirect('/jobs');
    }

    public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job) {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
    // authorize 

    // update the job
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to job page
    return redirect('/jobs/'.$job->id);
    }

    public function destroy(Job $job) {
        // authorize

    // delete the job
    $job->delete();

    // redirect to jobs page
    return redirect('/jobs');
    }
}
