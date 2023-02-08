<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
