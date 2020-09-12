<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_donors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->unsignedbigInteger('dnt_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phoneno');
            $table->string('email');

            $table->double('amount', 13, 2);     
            $table->timestamps();
        });
        Schema::table('donation_donors', function (Blueprint $table) {

            $table->foreign('dnt_id')->references('id')->on('donations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_donors');
    }
}
