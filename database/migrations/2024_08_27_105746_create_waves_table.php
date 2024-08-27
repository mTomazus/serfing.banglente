<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waves', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('competition_id');
            $table->unsignedTinyInteger('division_id');
            $table->unsignedTinyInteger('gender_id');
            $table->unsignedSmallInteger('surfer_id');
            $table->unsignedTinyInteger('score');
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
        Schema::dropIfExists('waves');
    }
}
