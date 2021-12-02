<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
            $table->string('voivodeship', 20);
            $table->string('district', 20);
            $table->string('commune', 20);
            $table->string('city', 20);
            $table->string('street', 20);
            $table->integer('area');
            $table->integer('price');
            $table->string('description', 500);
            $table->string('title', 500);
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->string('type', 30)->nullable();
            $table->boolean('fence')->nullable();
            $table->string('driveway', 20)->nullable();
            $table->boolean('exclusivity')->nullable();
            $table->string('property_form', 20)->nullable();
            $table->string('broker_email', 20)->nullable();
            $table->string('broker_phone', 20)->nullable();
            $table->string('images', 500);
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
        Schema::dropIfExists('plots');
    }
}
