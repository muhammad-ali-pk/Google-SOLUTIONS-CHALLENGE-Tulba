<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Job;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function login()
    {
        $loginData = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = request()->input('email');
        $password = request()->input('password');

        $employer = Employer::where('email', $email)->first();
        $employer = Employer::where('password', $password)->first();
        if ($employer != null) {
            request()->session()->put('userEmail', $employer['email']);
            request()->session()->put('userId', $employer['id']);
            request()->session()->put('profile_photo', $employer['profile_photo']);
            session()->save();
            return redirect()->to("/employer");
        } else {
            return redirect()->back()->withErrors('Email or Password Incorrect!');
        }
    }

    public function register()
    {
        $registrationData = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'fullname' => 'required',
            'fatherfullname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'skills' => 'required',
            'companyaddress' => 'required',
            'company' => 'required',
            'companyphone' => 'required',
            'position' => 'required',
            'university' => 'required',
            'discipline' => 'required',
            'year' => 'required',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'total_employees' => 'required'
        ]);


        $registrationData['email'] = request()->input('email');
        $registrationData['password'] = request()->input('password');
        $registrationData['fullname'] = request()->input('fullname');
        $registrationData['fatherfullname'] = request()->input('fatherfullname');
        $registrationData['phone'] = request()->input('phone');
        $registrationData['address'] = request()->input('address');
        $registrationData['dob'] = request()->input('dob');
        $registrationData['gender'] = request()->input('gender');
        $registrationData['skills'] = request()->input('skills');
        $registrationData['companyaddress'] = request()->input('companyaddress');
        $registrationData['company'] = request()->input('company');
        $registrationData['companyphone'] = request()->input('companyphone');
        $registrationData['position'] = request()->input('position');
        $registrationData['university'] = request()->input('university');
        $registrationData['discipline'] = request()->input('discipline');
        $registrationData['year'] = request()->input('year');
        $registrationData['total_employees'] = request()->input('total_employees');

        $profile_photo = request()->file('profile_photo');
        $profile_photo_name = rand() . '.' . $profile_photo->getClientOriginalExtension();
        $profile_photo->move(public_path("images"), $profile_photo_name);
        $registrationData['profile_photo'] = $profile_photo_name;

        $company_logo = request()->file('company_logo');
        $company_logo_name = rand() . '.' . $company_logo->getClientOriginalExtension();
        $company_logo->move(public_path("images"), $company_logo_name);
        $registrationData['company_logo'] = $company_logo_name;

        $employer = Employer::create($registrationData);
        if ($employer) {
            return redirect()->to('/employer/registersuccessfull');
        }
    }


    public function postJob()
    {
        if (session()->has('userEmail')) {
            $jobData = request()->validate([
                'jobtitle' => 'required',
                'jobtype' => 'required',
                'website' => 'required',
                'pay' => 'required',
                'joblocation' => 'required',
                'deadline' => 'required',
                'skills' => 'required',
                'working_hours' => 'required',
                'discipline' => 'required',
                'cgpa' => 'required'
            ]);
            $employer_email  = session()->get('userEmail');
            $employer = Employer::where('email', $employer_email)->first();
            $jobData['employer_id'] = $employer['id'];
            $jobData['jobtitle'] = request()->input('jobtitle');
            $jobData['jobtype'] = request()->input('jobtype');
            $jobData['website'] = request()->input('website');
            $jobData['pay'] = request()->input('pay');
            $jobData['joblocation'] = request()->input('joblocation');
            $jobData['deadline'] = request()->input('deadline');
            $jobData['skills'] = request()->input('skills');
            $jobData['working_hours'] = request()->input('working_hours');
            $jobData['discipline'] = request()->input('discipline');
            $jobData['cgpa'] = request()->input('cgpa');

            $job =   Job::create($jobData);
            if ($job) {
                return redirect()->to('/employer/jobpost-successful');
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function getProfile()
    {
        if (session()->has('userEmail')) {
            $employer = Employer::where('email', session()->get('userEmail'))->first();
            return view('employer.employer_profile', ['employerData' => $employer]);
        } else {
            return redirect()->to('/');
        }
    }

    public function updateProfile()
    {
        if (session()->has('userEmail')) {
            $employer = Employer::where('email', session()->get('userEmail'))->first();
            if (request()->input('address') != null) {
                $employer['address'] = request()->input('address');
            }
            if (request()->input('companyphone') != null) {
                $employer['companyphone'] = request()->input('companyphone');
            }

            if (request()->input('address') != null) {
                $employer['address'] = request()->input('address');
            }

            if (request()->input('company') != null) {
                $employer['company'] = request()->input('company');
            }

            if (request()->input('companyaddress') != null) {
                $employer['companyaddress'] = request()->input('companyaddress');
            }

            if (request()->input('total_employees') != null) {
                $employer['total_employees'] = request()->input('total_employees');
            }


            $employer->update();

            return redirect()->back();
        } else {
            return redirect()->to('/');
        }
    }

    public function myJobs()
    {
        if (session()->has('userId')) {
            $jobs = Job::with('employer')->where('employer_id', session()->get('userId'))->latest()->get();
            return view('employer.employer_myjobs', ['myJobs' => $jobs]);
        } else {
            return redirect()->to('/');
        }
    }

    public function getJobDetails($jobid)
    {
        if (session()->has('userId')) {
            $jobs = Job::where([
                ['employer_id', '=', session()->get('userId')],
                ['id', '=', $jobid],
            ])->first();
            return view('employer.employer_myjob_details', ['myJobs' => $jobs]);
        } else {
            return redirect()->to('/');
        }
    }

    public function deleteJob($jobid)
    {
        if (session()->has('userId')) {
            $jobs = Job::where([
                ['employer_id', '=', session()->get('userId')],
                ['id', '=', $jobid],
            ])->first();
            $jobs->delete();
            return redirect()->back();
        } else {
            return redirect()->to('/');
        }
    }
}
