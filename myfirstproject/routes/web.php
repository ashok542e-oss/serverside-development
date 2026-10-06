<?php

use Illuminate\Support\Facades\Route;

// Home Route - passes a greeting variable
Route::get('/', function () {
    return view('home', ['greeting' => 'Hello World']);
});

// Jobs Listing Route - passes an array of jobs
Route::get('/jobs', function () {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Assistant',
            'salary' => '$30,000'
        ]
    ];

    return view('jobs', ['jobs' => $jobs]);
});

// Single Job Route - uses Arr::first to find a job by id
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Assistant',
            'salary' => '$30,000'
        ]
    ];

    $job = \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', ['job' => $job]);
});

// Contact Route
Route::get('/contact', function () {
    return view('contact');
});
