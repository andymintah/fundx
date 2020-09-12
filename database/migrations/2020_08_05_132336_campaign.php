<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Campaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->index();
            $table->string('cmpname');
            $table->longText('description')->nullable();
            $table->string('imgurl');
            $table->date('start_date'); 
            $table->date('end_date');
            $table->double('amount', 13, 2); 
            $table->string('category');
            $table->double('raised_amount', 13, 2)->default('0');  
            $table->double('balance_amount', 13, 2)->storedAs('amount-raised_amount'); 
            $table->double('withdrawn_amount', 13, 2)->default('0'); 
            $table->double('withdraw_balance', 13, 2)->storedAs('amount-withdrawn_amount'); 
            $table->string('status')->nullable(); 

    
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('campaigns', function (Blueprint $table) {
          
            $table->foreign('user_id')->references('id')->on('users');
          
             //   $table->foreign('category_id')->references('id')->on('camapaign_category');

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
