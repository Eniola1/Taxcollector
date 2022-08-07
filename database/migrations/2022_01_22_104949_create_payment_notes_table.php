<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_notes', function (Blueprint $table) {
            $table->id();

            
            
            $table->unsignedBigInteger('payment_id');

            // $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->string('status');

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
        Schema::dropIfExists('payment_notes');
    }
}
