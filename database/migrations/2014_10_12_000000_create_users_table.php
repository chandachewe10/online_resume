<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->string('image');
            $table->string('comments');
            $table->string('workplace');
            $table->string('workplace1');
            $table->date('startdate');
            $table->date('startdate1');
            $table->date('enddate');
            $table->date('enddate1');
            $table->string('present');
            $table->string('college/university');
            $table->string('collegestartdate');
            $table->string('collegeenddate');
            $table->string('qualifications');
            $table->string('references');
            $table->string('skills');
            $table->string('hobbies');
            $table->string('languages');
            $table->string('links');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
