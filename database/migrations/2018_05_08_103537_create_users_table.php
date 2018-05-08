<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_id')->unique();
            $table->string('password');
            $table->string('desgination');
            $table->string('mobile');
            $table->string('alter_mobile');
            $table->string('cmpny_name');
            $table->string('cmpny_location');
            $table->string('products');
            $table->string('industry');
            $table->string('business_name');
            $table->string('job_title');
            $table->string('contact_number');
            $table->string('cmpny_business_name');
            $table->string('file');
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
