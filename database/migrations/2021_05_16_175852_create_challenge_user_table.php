<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_user', function (Blueprint $table) {
            $table->primary(['challenge_id','user_id']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('challenge_id')->unsigned();
            $table->boolean('complete')->default(false);
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('challenge_id')
                ->references('id')
                ->on('challenges');
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
        Schema::dropIfExists('challenge_user');
    }
}
