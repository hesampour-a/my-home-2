<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInLampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_lamps', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('persianName')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('dim')->nullable();
            $table->integer('connectionStatus')->nullable();
            $table->integer('powerConsumption')->nullable();
            $table->string('voltageRange')->nullable();
            $table->string('dailyAvrage')->nullable();
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
        Schema::dropIfExists('in_lamps');
    }
}
