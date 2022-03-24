<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('image');
            $table->text('biography');

        });

        Schema::create('house', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('image');
            $table->string('colour');
        });

        Schema::create('title', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character');
        Schema::dropIfExists('house');
        Schema::dropIfExists('title');
    }
}
