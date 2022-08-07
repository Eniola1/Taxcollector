<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printjobs', function (Blueprint $table) {
            $table->id();

            
            
            $table->unsignedBigInteger('dn_id');
            // $table->foreign('dn_id')->references('id')->on('demand_notices')->onDelete('cascade');

            
            $table->unsignedBigInteger('user_id');

            
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      
            $table->string('status')->default('Failed');
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
        Schema::dropIfExists('printjobs');
    }
}
