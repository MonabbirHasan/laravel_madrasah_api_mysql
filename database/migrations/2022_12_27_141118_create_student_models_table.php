<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->text('image', 2000);
            $table->text('certificate', 2000);
            $table->string('age', 255);
            $table->string('today_date', 255);
            $table->string('date');
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('serial', 255);
            $table->string('topper', 255);
            $table->string('completed', 255);
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_models');
    }
};
