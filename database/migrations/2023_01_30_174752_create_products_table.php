<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('shortDescription');
            $table->text('longDescription');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('model');
            $table->string('color');
            $table->string('size');
            $table->string('mainImage');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
