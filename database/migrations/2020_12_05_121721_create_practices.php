<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('participation')->default(1);
            $table->text("year")->nullable(true);
            $table->text("month")->nullable(true);
            $table->text("day")->nullable(true);
            $table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('lesson_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('lesson_id')->references('id')->on('lessons');
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
        Schema::dropIfExists('practices');
    }
}
