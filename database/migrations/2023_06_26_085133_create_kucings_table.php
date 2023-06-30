<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kucings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->text('description');
            $table->string('image');
            $table->integer('price');
            // $table->integer('biteyness');
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
        Schema::dropIfExists('kucings');
    }
};
