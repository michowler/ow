<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('google_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('description')->nullable();                        
            $table->string('summary')->nullable();                                    
            $table->string('age')->nullable();                        
            $table->string('country')->nullable();           
            $table->string('gender')->nullable();            
            $table->string('education_level')->nullable();
            $table->string('latest_edu')->nullable();   
            $table->string('occupation')->nullable();       
            $table->string('working_level')->nullable();
            $table->string('latest_work_pos')->nullable();          
            $table->string('birth_date')->nullable();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique();
            $table->string('contact_num')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}