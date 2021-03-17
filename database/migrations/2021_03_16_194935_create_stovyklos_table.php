<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStovyklosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stovyklos', function (Blueprint $table) {
            $table->id();
            $table->string('pamaina', 100);
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('address', 150);
            $table->string('age', 100);
            $table->string('swim', 100);
            $table->string('alergy', 200);
            $table->string('email', 150);
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
        Schema::dropIfExists('stovyklos');
    }
}
