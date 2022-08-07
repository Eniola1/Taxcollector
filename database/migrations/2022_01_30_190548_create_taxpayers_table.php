<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayers', function (Blueprint $table) {
            $table->id();


            $table->string('taxpayer_name')->index();
            $table->string('email')->nullable();
            $table->bigInteger('taxpayer_id'); //->unique();
            $table->string('image')->default('default.png');
            $table->text('address'); //->nullable();
            $table->text('description')->nullable();
            $table->string('buildingtype')->default('large');
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('ward_id');
            $table->unsignedBigInteger('community_id');
            $table->string('phone')->nullable();
            $table->string('use')->default('E');

            // $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            // $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            // $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
        // });
    // }

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
        Schema::dropIfExists('taxpayers');
    }
}
