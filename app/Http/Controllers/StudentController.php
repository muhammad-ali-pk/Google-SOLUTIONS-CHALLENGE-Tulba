<?php

namespace App\Http\Controllers;

use App\Job;
use App\Student;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobMail;

class StudentController extends Controller
{
    public function login()
    {
        $loginData = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = request()->input('email');
        $password = request()->input('password');

        $student = Student::where('email', $email)->first();
        $student = Student::where('password', $password)->first();
        if ($student != null) {
            request()->session()->put('userEmail', $student['email']);
            request()->session()->put('profile_photo', $student['profile_photo']);
            session()->save();
            return redirect()->to("/student");
        } else {
            return redirect()->back()->withErrors('Email or Password Incorrect!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->to("/");
    }

    public function register()
    {
        $registrationData = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'fullname' => 'required',
            'fatherfullname' => 'required',
            'profile_photo' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'skills' => 'required',
            'institution' => 'required',
            'academicyear' => 'required',
            'cgpa' => 'required',
            'schoolhours' => 'required',
        ]);
        $registrationData['email'] = request()->input('email');
        $registrationData['password'] = request()->input('password');
        $registrationData['fullname'] = request()->input('fullname');
        $registrationData['fatherfullname'] = request()->input('fatherfullname');
        $registrationData['profile_photo'] = request()->input('profile_photo');
        $registrationData['phone'] = request()->input('phone');
        $registrationData['address'] = request()->input('address');
        $registrationData['dob'] = request()->input('dob');
        $registrationData['gender'] = request()->input('gender');
        $registrationData['skills'] = request()->input('skills');
        $registrationData['institution'] = request()->input('institution');
        $registrationData['academicyear'] = request()->input('academicyear');
        $registrationData['cgpa'] = request()->input('cgpa');
        $registrationData['schoolhours'] = request()->input('schoolhours');

        $profile_photo = request()->file('profile_photo');
        $profile_photo_name = rand().'.'.$profile_photo->getClientOriginalExtension();
        $profile_photo->move(public_path('images'),$profile_photo_name);
        $registrationData['profile_photo']= $profile_photo_name;

        $student = Student::create($registrationData);
        if ($student) {
            return redirect()->to('/student/registersuccessfull');
        }
    }

    public function getJobs()
    {
        if (session()->has('userEmail')) {
            $allJobs = Job::with('employer')->latest()->get();
            return view('student.student_jobs', ['allJobs' => $allJobs]);
        } else {
            return redirect()->to('/');
        }
    }

    public function applyForJob($jobid)
    {
        if (session()->has('userEmail')) {
            $job = Job::with('employer')->where('id', $jobid)->first();
            $applicantData = Student::where('email',session()->get('userEmail'))->first();
            Mail::to($job->employer['email'])->send(new \App\Mail\JobMail($applicantData));
            return redirect()->to('/student/applied-successful');
        } else {
            return redirect()->to('/');
        }
    }

    public function getProfile()
    {
        if (session()->has('userEmail')) {
            $student = Student::where('email', session()->get('userEmail'))->first();
            return view('student.student_profile', ['studentData' => $student]);
        } else {
            return redirect()->to('/');
        }
    }

    public function updateProfile()
    {
        $student = Student::where('email', session()->get('userEmail'))->first();
        if (request()->input('address') != null) {
            $student['address'] = request()->input('address');
        }
        if (request()->input('skills') != null) {
            $student['skills'] = request()->input('skills');
        }

        if (request()->input('institution') != null) {
            $student['institution'] = request()->input('institution');
        }

        if (request()->input('institution_address') != null) {
            $student['institution_address'] = request()->input('institution_address');
        }

        if (request()->input('academicyear') != null) {
            $student['academicyear'] = request()->input('academicyear');
        }

        if (request()->input('cgpa') != null) {
            $student['cgpa'] = request()->input('cgpa');
        }


        $student->update();

        return redirect()->back();
    }
}
