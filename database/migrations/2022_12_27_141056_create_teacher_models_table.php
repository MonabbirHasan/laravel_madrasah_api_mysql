<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TeacherModels;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("username");
            $table->text("image",2000);
            $table->string("email");
            $table->string("phone");
            $table->text("certificate",2000);
            $table->string("age");
            $table->string("gender");
            $table->string("city");
            $table->string("state");
            $table->string("serial");
            $table->string("address");
            $table->string("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_models');
    }
};
