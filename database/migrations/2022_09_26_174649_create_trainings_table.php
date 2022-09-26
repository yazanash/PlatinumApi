<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->dateTime("LastCheck");
            $table->integer("player_id");
            $table->integer("trainer_id")->nullable();
            $table->integer("Sport_id");
            $table->dateTime("rollDate");
            $table->double("Price");
            $table->integer("Offer_id")->nullable();
            $table->double("PriceAfterOffer");
            $table->integer("monthCount");
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
        Schema::dropIfExists('trainings');
    }
};
