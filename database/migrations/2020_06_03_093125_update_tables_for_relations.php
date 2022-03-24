<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablesForRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character', function (Blueprint $table) {
        
            $table->foreignId('mother_id')->nullable()->constrained('character');
            $table->foreignId('father_id')->nullable()->constrained('character');
            $table->foreignId('id_title')->nullable()->constrained('title');
        });

        Schema::create('house_has_characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character')->constrained('character');
            $table->foreignId('house')->constrained('house');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character', function (Blueprint $table) {
            $table->dropColumn('mother_id');
            $table->dropColumn('father_id');
            $table->dropColumn('id_title');
        });

        Schema::dropIfExists('house_has_characters');

    }
}
