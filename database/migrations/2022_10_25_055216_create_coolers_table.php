<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coolers', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(0);
            $table->string('name')->nullable();
            $table->string('persianName')->nullable();
            $table->integer('currentTemperature')->nullable();
            $table->integer('desiredTemperature')->nullable();
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
        Schema::dropIfExists('coolers');
    }
}
