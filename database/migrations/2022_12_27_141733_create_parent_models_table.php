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
        Schema::create('parent_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
            $table->text('image');
            $table->text('nid');
            $table->string('now_date');
            $table->string('age');
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('profession');
            $table->string('phone');
            $table->string('email');
            $table->string('nationality');
            $table->string('student');
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
        Schema::dropIfExists('parent_models');
    }
};
