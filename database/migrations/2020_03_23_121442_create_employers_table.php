<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('fatherfullname');
            $table->double('phone');
            $table->string('address')->nullable();
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('position');
            $table->string('companyaddress')->nullable();
            $table->double('companyphone')->nullable();
            $table->string('skills')->nullable();
            $table->string('university');
            $table->string('discipline');
            $table->double('year');
            $table->longText('company_logo');
            $table->longText('profile_photo');
            $table->integer('total_employees')->nullable();
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
        Schema::dropIfExists('employers');
    }
}
