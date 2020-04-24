<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->longText('profile_photo');
            $table->string('fullname');
            $table->string('fatherfullname');
            $table->double('phone');
            $table->string('address')->nullable();
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('institution')->nullable();
            $table->string('institution_address')->nullable();
            $table->integer('academicyear')->nullable();
            $table->double('cgpa')->nullable();
            $table->integer('schoolhours');
            $table->string('skills')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
