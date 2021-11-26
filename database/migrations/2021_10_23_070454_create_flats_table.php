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
            $table->string('city', 50);
            $table->string('commune', 50);
            $table->string('street', 50);
            $table->integer('area');
            $table->integer('price');
            $table->integer('rooms_nr');
            $table->string('description', 500);
            $table->string('title', 250);
            $table->string('market', 20);
            $table->integer('phone_nr')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('floor_nr')->nullable();
            $table->integer('year_build')->nullable();
            $table->string('kitchen_type', 100)->nullable();
            $table->string('media', 100)->nullable();
            $table->string('heating', 20)->nullable();
            $table->string('parking', 20)->nullable();
            $table->boolean('furniture')->nullable();
            $table->boolean('lift')->nullable();
            $table->boolean('attic')->nullable();
            $table->boolean('two_levels')->nullable();
            $table->string('balcony', 20)->nullable();
            $table->string('basement', 20)->nullable();
            $table->boolean('fitted_kitchen')->nullable();
            $table->string('condition', 20)->nullable();
            $table->boolean('closed_estate')->nullable();
            $table->boolean('exclusivity')->nullable();
            $table->boolean('without_commission')->nullable();
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
        Schema::dropIfExists('flats');
    }
}
