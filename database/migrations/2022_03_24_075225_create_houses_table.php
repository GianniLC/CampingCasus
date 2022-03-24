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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("contactPersonFirstName");
            $table->string("contactPersonLastName");
            $table->integer("peopleAmount");
            $table->integer("under4");
            $table->integer("between4and12");
            $table->integer("between12and18");
            $table->integer("between18and65");
            $table->integer("above65");
            $table->boolean("pets");
            $table->integer("areasize");
            $table->integer("dayPrice");
            $table->boolean("reserved");
            $table->boolean("arrived");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
