<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRokalHozesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RokalHozes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('phone')->nullable();
            $table->float('Persius')->nullable();
            $table->string('Name')->nullable();
            $table->date('date')->nullable();
            $table->text('God')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RokalHozes');
    }
}
