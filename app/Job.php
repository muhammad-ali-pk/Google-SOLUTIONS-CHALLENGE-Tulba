<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employer;

class Job extends Model
{
    protected $guarded=[];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
