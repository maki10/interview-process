<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('interview_type_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('length');
            $table->integer('from');
            $table->integer('to');
            $table->string('status');
            $table->timestamps();

            $table->foreign('interview_type_id')->references('id')->on('interview_types')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
