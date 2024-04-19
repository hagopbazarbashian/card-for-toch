<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('newproduct_id');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('additionalinformation')->nullable();
            $table->string('quantity')->default('1');
            $table->string('symbole');
            $table->string('price');
            $table->string('fixprice');
            $table->string('color')->nullable();
            $table->string('status')->default('0');
            $table->foreign('newproduct_id')->references('id')->on('newproducts')->onDelete('cascade');
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
        Schema::dropIfExists('checkouts');
    }
};
