<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('status', 50);
            $table->string('voivodeship', 50);
            $table->string('district', 50);
            $table->string('commune', 50);
            $table->string('street', 50);
            $table->double('area');
            $table->integer('price');
            $table->integer('rooms_nr');
            $table->string('description', 500);
            $table->string('title', 250);
            $table->string('market', 10);
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
        Schema::dropIfExists('flats');
    }
}
