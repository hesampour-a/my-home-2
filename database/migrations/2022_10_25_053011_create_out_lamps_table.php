<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutLampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_lamps', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('persianName')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('connectionStatus')->nullable();
            $table->integer('powerConsumption')->nullable();
            $table->string('voltageRange')->nullable();
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
        Schema::dropIfExists('out_lamps');
    }
}
