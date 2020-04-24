<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Employer extends Model
{
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token', 'id', 'fullname', 'fatherfullname', 'phone', 'address', 'dob', 'gender', 'position', 'companyaddress', 'companyphone', 'created_at', 'updated_at', 'skills',
    ];

    public function job()
    {
        return $this->hasMany(Job::class);
    }
}
