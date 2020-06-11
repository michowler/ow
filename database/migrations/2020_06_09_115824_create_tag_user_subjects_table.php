<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagUserSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_user_subjects', function (Blueprint $table) {
            $table->bigIncrements('subjects_id');
            $table->unsignedBigInteger('users_id');            
            $table->timestamps();
            $table->foreign('users_id')
            ->references('id')
            ->on('users')->onDelete('cascade');
            $table->foreign('subjects_id')
            ->references('id')
            ->on('subjects')->onDelete('cascade');
        });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_user_subjects');
    }
}