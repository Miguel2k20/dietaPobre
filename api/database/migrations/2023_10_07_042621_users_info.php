<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->default();
            $table->integer('age')->default();
            $table->integer('tall')->default();
            $table->integer('weigh')->default();
            $table->enum('objective', ['0', '1']);
            $table->enum('physical_activity', ['0', '1', '2', '3']);
            $table->integer('water')->default();
            $table->timestamps();
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
        Schema::dropIfExists('users_info');
    }
}
