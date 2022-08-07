<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('taxpayer_id');
            $table->unsignedBigInteger('revenue_id');

            // $table->foreign('taxpayer_id')->references('id')->on('tax_payers')->onDelete('cascade');
            // $table->foreign('revenue_id')->references('id')->on('revenues')->onDelete('cascade');
            
            $table->string('status')->default('Unpaid');

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
        Schema::dropIfExists('bills');
    }
}
