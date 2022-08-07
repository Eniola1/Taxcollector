<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_notices', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('taxpayer_id'); //->unique();
            $table->string('period');
            $table->string('amount');
            $table->string('bills');
            $table->string('total');

            $table->string('description');
            $table->string('notes');

            // $table->foreign('taxpayer_id')->references('id')->on('tax_payers')->onDelete('cascade');

            // $table->string('period')->default('large');


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
        Schema::dropIfExists('demand_notices');
    }
}
