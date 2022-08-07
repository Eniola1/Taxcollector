<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();

            

            $table->bigInteger('taxpayer_id'); //->unique();
            // $table->foreign('taxpayer_id')->references('id')->on('tax_payers')->onDelete('cascade');


                        
            $table->string('message')->default('0000000000');
            $table->string('status')->default('sent');

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
        Schema::dropIfExists('sms');
    }
}
