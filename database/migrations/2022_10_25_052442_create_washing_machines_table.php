<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashingMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washing_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('persianName')->nullable();
            $table->boolean('status')->default(0);
            $table->string('washingProgram')->nullable();
            $table->string('timeRemaining')->nullable();
            $table->boolean('isPause')->default(0);
            $table->integer('weight')->nullable();
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
        Schema::dropIfExists('washing_machines');
    }
}
