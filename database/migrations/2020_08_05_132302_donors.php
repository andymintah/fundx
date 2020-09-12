<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->unsignedbigInteger('cmgn_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phoneno');
            $table->string('email');

            $table->double('amount', 13, 2);     
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
        //
    }
}
