<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            

            $table->bigInteger('taxpayer_id'); //->unique();
            // $table->foreign('taxpayer_id')->references('id')->on('tax_payers')->onDelete('cascade');


                        
            $table->string('amount')->default('0000000000');
            $table->string('type')->default('0000000000');


            $table->string('status')->default('Current');

            $table->string('description');
            $table->string('notes');
            



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
        Schema::dropIfExists('transactions');
    }
}
