<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::view('/student', 'student/studentindex');
Route::view('/employer', 'employer/employerindex');

Route::get('/student/login', function () {
    if (!session()->has('userEmail')) {
        return view('student.studentlogin');
    } else {
        return redirect()->to('/student');
    }
});
Route::get('/employer/login', function () {
    if (!session()->has('userEmail')) {
        return view('employer.employerlogin');
    } else {
        return redirect()->to('/employer');
    }
});
Route::post('/student/login', 'StudentController@login');
Route::post('/employer/login', 'EmployerController@login');


Route::get('/student/register', function () {
    if (!session()->has('userEmail')) {
        return view('student.studentregister1');
    } else {
        return redirect()->to('/student');
    }
});
Route::post('/student/register', 'StudentController@register');

Route::get('/employer/register', function () {
    if (!session()->has('userEmail')) {
        return view('employer.employerregister');
    } else {
        return redirect()->to('/employer');
    }
});
Route::post('/employer/register', 'EmployerController@register');


Route::get('/student/registersuccessfull', function () {
    if (!session()->has('userEmail')) {
        return view('student.studentregistersuccessfull');
    } else {
        return redirect()->to('/student');
    }
});
Route::get('/employer/registersuccessfull', function () {
    if (!session()->has('userEmail')) {
        return view('employer.employer_register_successful');
    } else {
        return redirect()->to('/employer');
    }
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/aboutus', function () {
    return view('student.about_us');
});

Route::get('/employer/aboutus', function () {
    return view('employer.about_us');
});

Route::get('/student/stories', function () {
    return view('student.stories');
});

Route::get('/employer/stories', function () {
    return view('employer.stories');
});

Route::get('/student/partners', function () {
    return view('student.partners');
});

Route::get('/employer/partners', function () {
    return view('employer.partners');
});


Route::get('/student/jobs', 'StudentController@getJobs');
Route::get('/student-mobile', function () {
    return view('student.student-mobile');
});
Route::get('/employer-mobile', function () {
    return view('employer.employer-mobile');
});


Route::get('/student/job-{id}/jobdetails', 'JobController@getJobDetails');

Route::get('/employer/postjob', function () {
    if (session()->has('userEmail')) {
        return view('employer.employer_postjob');
    } else {
        return redirect()->to('/');
    }
});

Route::post('/employer/postjob', 'EmployerController@postJob');

Route::get('/employer/jobpost-successful', function () {
    if (session()->has('userEmail')) {
        return view('employer.employer_postjob_confirmation');
    } else {
        return redirect()->to('/');
    }
});

Route::get('/logout', 'StudentController@logout');


Route::get('/student/job-{jobid}/apply-successful', 'StudentController@applyForJob');
Route::get('/student/applied-successful', function () {
    return view('student.job_apply_confirmation');
});
Route::get('/student/profile', 'StudentController@getProfile');
Route::put('/student/profile', 'StudentController@updateProfile');

Route::get('/employer/profile', 'EmployerController@getProfile');
Route::put('/employer/profile', 'EmployerController@updateProfile');

Route::get('/employer/myjobs', 'EmployerController@myJobs');
Route::get('/employer/myjob-{jobid}', 'EmployerController@getJobDetails');
Route::get('/employer/myjob-{jobid}/delete', 'EmployerController@deleteJob');
