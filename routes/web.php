<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



// $jobs = 

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::with('employer')->get() // Here we changed the query to include the employer relationship so the N+1 problem is solved and we can access the employer's name in the view. What it does is that it will load the employer relationship for each job in the collection. This way, we can access the employer's name in the view without making additional queries. Which reduces the number of queries from N+1 to 2 (one for the jobs and one for the employers).
    ]);
});

Route::get('/jobs/{id}', function($id) {
   $job = Job::find(($id));

   return view('job', ['job' => $job]);
});

Route::get('/contact', function() {
    return view('contact');
});