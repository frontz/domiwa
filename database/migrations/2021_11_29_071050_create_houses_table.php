<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
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
            $table->string('market', 20);
            $table->string('status', 10);
            $table->string('voivodeship', 20);
            $table->string('district', 20);
            $table->string('commune', 20);
            $table->string('street', 20);
            $table->string('city', 20);
            $table->integer('area');
            $table->integer('price');
            $table->integer('rooms_nr');
            $table->integer('utility_rooms_nr');
            $table->string('description', 500);
            $table->string('title', 500);
            $table->integer('plot_area');
            $table->string('building_type', 50)->nullable();
            $table->integer('floors_nr')->nullable();
            $table->integer('bathrooms_nr')->nullable();
            $table->boolean('heating')->nullable();
            $table->string('driveway', 20)->nullable();
            $table->boolean('balcony')->nullable();
            $table->string('water_connection', 20)->nullable();
            $table->boolean('decorated_garden')->nullable();
            $table->boolean('electricity')->nullable();
            $table->boolean('power')->nullable();
            $table->string('sewers', 20)->nullable();
            $table->string('roof_type', 20)->nullable();
            $table->string('condition', 20)->nullable();
            $table->string('property_type', 20)->nullable();
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
        Schema::dropIfExists('houses');
    }
}
