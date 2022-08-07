<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetNamingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('street_namings', function (Blueprint $table) {
            $table->id();
            $table->string('street_name')->index()->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->unsignedBigInteger('ward_id');
            $table->unsignedBigInteger('community_id');
            $table->string('user_ip_address');
            $table->string('taxpayers_id');
            $table->string('road_state')->default('Untarred');
            $table->string('drainage')->default('No');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('street_namings');
    }
}
