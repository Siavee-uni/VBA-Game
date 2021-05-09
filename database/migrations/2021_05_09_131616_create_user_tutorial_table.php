<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTutorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tutorial', function (Blueprint $table) {
            $table->primary(['user_id','tutorial_id']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tutorial_id')->unsigned();
            $table->string('note');
            $table->boolean('complete');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('tutorial_id')
                ->references('id')
                ->on('tutorials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tutorial');
    }
}
