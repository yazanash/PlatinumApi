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
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->integer("player_id");
            $table->string("R_Humerus");
            $table->string("L_Humerus");
            $table->string("R_Arm");
            $table->string("L_Arm");
            $table->string("Shoulders");
            $table->string("Waist");
            $table->string("Chest");
            $table->string("Hips");
            $table->string("R_Thigh");
            $table->string("L_Thigh");
            $table->string("R_Leg");
            $table->string("L_Leg");
            $table->string("Weight");
            $table->string("Height");
            $table->dateTime("Check_Date");
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
        Schema::dropIfExists('metrics');
    }
};
