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
        Schema::create('admition_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
            $table->text('image');
            $table->string('serial');
            $table->string('city');
            $table->string('state');
            $table->string('old_madrasah');
            $table->string('certificate');
            $table->string('parent');
            $table->string('age');
            $table->string('add_date');
            $table->string('nationality');
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
        Schema::dropIfExists('admition_models');
    }
};
