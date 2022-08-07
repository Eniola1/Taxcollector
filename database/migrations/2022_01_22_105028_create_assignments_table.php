<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();

                        
            $table->unsignedBigInteger('assignee_id')->nullable();
            $table->unsignedBigInteger('assigner_id')->nullable();
      
            
            $table->unsignedBigInteger('ticket_id');

            // $table->foreign('assignee_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('assigner_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('assignments');
    }
}
