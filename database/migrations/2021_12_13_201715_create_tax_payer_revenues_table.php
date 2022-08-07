<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxPayerRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payer_revenues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tax_payer_id');
            $table->foreignId('revenue_id');
            $table->timestamps();

            //$table->foreign('revenue_id')->references('id')->on('revenues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_payer_revenues');
    }
}
