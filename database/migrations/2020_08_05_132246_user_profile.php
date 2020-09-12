<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('othernames');
            $table->string('dpurl');
            $table->unsignedbigInteger('nationalidtype')->nullable();
            $table->string('nationalidno');
            $table->string('email');
            $table->string('contactno1');
            $table->string('contactno2');
            $table->string('contactno3');
            $table->bigInteger('user_id')->unsigned();
            $table->unsignedbigInteger('role_id')->nullable();
            $table->timestamps();
        });
        Schema::table('user_profile', function (Blueprint $table) {
           
            $table->foreign('user_id')->references('id')->on('users');          
                $table->foreign('role_id')->references('id')->on('roles');
                $table->foreign('nationalidtype')->references('id')->on('nat_id_types');
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
