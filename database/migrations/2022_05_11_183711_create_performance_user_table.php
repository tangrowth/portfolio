<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('performance_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('performance_id')->references('id')->on('performances');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_user');
    }
}
