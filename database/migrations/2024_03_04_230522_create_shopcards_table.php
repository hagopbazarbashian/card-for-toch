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
        Schema::create('shopcards', function (Blueprint $table) {
            $table->id();
            $table->string('user_session');
            $table->string('title')->nullable();
            $table->string('photo')->nullable();
            $table->string('price')->nullable();
            $table->string('many')->nullable();
            $table->string('fix_price')->nullable();
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('shopcards');
    }
};
