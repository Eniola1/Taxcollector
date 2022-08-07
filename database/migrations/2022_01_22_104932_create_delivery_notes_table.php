<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id();

            
            
            $table->unsignedBigInteger('dn_id');

            // $table->foreign('dn_id')->references('id')->on('demand_notices')->onDelete('cascade');
            $table->string('status')->default('Undelivered');
            
            $table->string('latitude')->default('0000000000');
            $table->string('logitude')->default('0000000000');

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
        Schema::dropIfExists('delivery_notes');
    }
}
