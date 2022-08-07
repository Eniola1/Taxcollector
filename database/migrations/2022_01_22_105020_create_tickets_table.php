<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

                        
            
            $table->unsignedBigInteger('user_id')->nullable();
      
            
            $table->unsignedBigInteger('taxpayer_id');

            // $table->foreign('taxpayer_id')->references('id')->on('taxpayers')->onDelete('cascade');
            $table->string('status')->default('Open');

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
        Schema::dropIfExists('tickets');
    }
}
