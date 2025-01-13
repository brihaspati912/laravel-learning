<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('/jobs', [
        "jobs" => [
            [
                'id' => 1,
                'title' => "Web Developer",
                "salary" => "3000$",
            ],
            [
                'id' => 2,
                'title' => "Android Developer",
                "salary" => "8000$",
            ],
            [
                'id' => 3,
                'title' => "IOS Developer",
                "salary" => "30000$",
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('/contact');
});


Route::get('/lobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => "Web Developer",
            "salary" => "3000$",
        ],
        [
            'id' => 2,
            'title' => "Android Developer",
            "salary" => "8000$",
        ],
        [
            'id' => 3,
            'title' => "IOS Developer",
            "salary" => "30000$",
        ]
    ];
    /*
    (first method)
    function($job) use($id){
    return $jobs['id'] == $id;
    }
    (second method)
    */

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);



    return view('jobs', ['job' => $job]);
});

Route::middleware([\App\Http\Middleware\Cors::class])->group(function ($id) {
    Route::get('/jobs/{id}', function ($id) {
        $jobs = [
            [
                'id' => 1,
                'title' => "Web Developer",
                "salary" => "3000$",
            ],
            [
                'id' => 2,
                'title' => "Android Developer",
                "salary" => "8000$",
            ],
            [
                'id' => 3,
                'title' => "IOS Developer",
                "salary" => "30000$",
            ]
        ];
        // Return the job data
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);


        // dd($job); tocheck the function returns the found job and so we can pass it

        return view('job', ['job' => $job]);
    });
});
