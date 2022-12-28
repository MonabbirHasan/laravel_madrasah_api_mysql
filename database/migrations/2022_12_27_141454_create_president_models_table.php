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
        Schema::create('president_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('age', 255);
            $table->text('image', 2000);
            $table->string('nationality', 255);
            $table->string('address', 255);
            $table->string('category', 255);
            $table->string('spand_year', 255);
            $table->string('date', 255);
            $table->string('status', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('president_models');
    }
};
