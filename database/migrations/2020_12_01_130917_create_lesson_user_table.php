<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesson_user', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedInteger('lesson_id');
			$table->unsignedInteger('user_id');
			$table->primary(['lesson_id','user_id']);
			$table->foreign('lesson_id')->references('id')->on('users');
			$table->foreign('user_id')->references('id')->on('lessons');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('lesson_user');
	}
}
