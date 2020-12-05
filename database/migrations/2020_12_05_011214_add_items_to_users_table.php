<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text("birth_year")->nullable(true);
            $table->text("birth_month")->nullable(true);
            $table->text("birth_day")->nullable(true);
            $table->integer("members_path")->nullable(true);
            $table->integer("user_type")->nullable(true);
            $table->integer("gender")->nullable(true);
            $table->integer("difficulty_point")->nullable(true);
            $table->integer("transfer")->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
