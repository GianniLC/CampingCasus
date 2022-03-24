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
        Schema::create('camping_houses', function (Blueprint $table) {
            $table->id();
            $table->string('contactPersonFirstName');
            $table->string('contactPersonLastName');
            $table->string('peopleAmount');
            $table->integer('under4');
            $table->integer('between4and12');
            $table->integer('between12and18');
            $table->integer('between18and65');
            $table->integer('above65');
            $table->boolean('pets');
            $table->integer('areasize');
            $table->integer('dayPrice');
            $table->dateTime('checkInDate')->nullable();
            $table->dateTime('checkOutDate')->nullable();
            $table->boolean('reserved');
            $table->boolean('arrived');
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
        Schema::dropIfExists('camping_houses');
    }
};
