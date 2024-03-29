<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('addressO')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('zipcode');
            $table->string('email');
            $table->string('phone');
            $table->string('note');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shippings');
    }
};
