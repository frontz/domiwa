<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premises', function (Blueprint $table) {
            $table->id();
            $table->string('status',50);
            $table->string('voivodeship',50);
            $table->string('district',50);
            $table->string('city',50);
            $table->string('commune',50);
            $table->string('street',50);
            $table->integer('area');
            $table->integer('price');
            $table->integer('rooms_nr');
            $table->string('description', 500);
            $table->string('title', 250);
            $table->string('market', 20);
            $table->integer('phones_nr')->nullable();
            $table->integer('year_build')->nullable();
            $table->double('n_geo_x', 10, 4)->nullable();
            $table->double('n_geo_y', 10, 4)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('destination', 50)->nullable();
            $table->string('air_conditioning', 50)->nullable();
            $table->string('security', 50)->nullable();
            $table->boolean('office')->nullable();
            $table->string('office_type', 50)->nullable();
            $table->boolean('shopwindow')->nullable();
            $table->string('water_connection', 50)->nullable();
            $table->boolean('intercom')->nullable();
            $table->decimal('height')->nullable();
            $table->string('condition', 20)->nullable();
            $table->boolean('exclusivity')->nullable();
            $table->boolean('without_commission')->nullable();
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
        Schema::dropIfExists('premises');
    }
}
