<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_access', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('user_id')->unsigned();
          $table->bigInteger('course_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('user');
          $table->foreign('course_id')->references('id')->on('course');
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
      Schema::dropIfExists('course_access');
    }
}
