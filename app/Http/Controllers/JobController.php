<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getJobDetails($id)
    {
        if (session()->has('userEmail')) {
            $jobDetails = Job::with('employer')->where('id', $id)->first();
            return view('student.student_job_detail', ['jobDetails' => $jobDetails]);
        } else {
            return redirect()->to('/');
        }
    }
}
