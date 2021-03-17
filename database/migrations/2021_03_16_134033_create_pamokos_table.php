<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePamokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pamokos', function (Blueprint $table) {
            $table->id();
            $table->string('paslauga', 100);
            $table->string('date', 100);
            $table->string('name', 100);
            $table->string('email', 150);
            $table->string('address', 150);
            $table->string('phone', 150);
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
        Schema::dropIfExists('pamokos');
    }
}
