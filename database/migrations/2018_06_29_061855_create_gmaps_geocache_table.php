<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGMapsGeoCacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmaps_geocache', function (Blueprint $table) {
            $table->increments('id');
            $table->text('address')->nullable()->default(null);
            $table->string('latitude');
            $table->string('longitude');
            $table->string('name')->nullable()->default(null);
            $table->string('message')->nullable()->default(null);
            $table->string('marker_color')->nullable()->default(null);
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
        Schema::drop('gmaps_geocache');
    }
}
