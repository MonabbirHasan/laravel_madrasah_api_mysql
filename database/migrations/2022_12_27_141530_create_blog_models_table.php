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
        Schema::create('blog_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title",255);
            $table->text("image",2000);
            $table->string("categoroy",255);
            $table->text("desc");
            $table->string("author",255);
            $table->string("date",255);
            $table->integer("like");
            $table->text("comment");
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
        Schema::dropIfExists('blog_models');
    }
};
