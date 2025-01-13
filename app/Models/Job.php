<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return  [
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
    }

    public static function find(int $id): array
    {

        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (! $job) {
            abort(404);
        }
        return $job;
    }
};

/**
 * In the provided code snippet, the variable $job is assigned the result of the Arr::first method, but it is not explicitly used anywhere in the code.The reason $job is not explicitly used is that the code is likely part of a larger method or function that returns the job if found. The return statement at the beginning of the code snippet suggests that the method is intended to return the job.
 */
/*
In this case, the $job variable is assigned the result of the Arr::first method, and then the method returns the job if found. If the job is not found, the abort(404) function is called, which terminates the request and returns a 404 status code.
 * 
 * 
 * 
 *  */
