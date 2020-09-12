<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->index();
            $table->string('dntname');
            $table->longText('description')->nullable();
            $table->string('imgurl');
            $table->date('start_date'); 
            $table->date('end_date');
            $table->double('amount', 13, 2);
            $table->string('items'); 
            $table->string('address'); 
            $table->double('raised_amount', 13, 2)->default('0');  
            $table->double('balance_amount', 13, 2)->storedAs('amount-raised_amount'); 
            $table->double('withdrawn_amount', 13, 2)->default('0'); 
            $table->double('withdraw_balance', 13, 2)->storedAs('amount-withdrawn_amount'); 
            $table->string('status')->nullable(); 

            $table->string('category');
    
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('donations', function (Blueprint $table) {
          
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
        Schema::dropIfExists('donation');
    }
}
