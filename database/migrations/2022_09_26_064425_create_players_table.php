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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("FullName");
            $table->string("Phone");
            $table->boolean("GenderMale");
            $table->integer("Weight");
            $table->integer("Height");
            $table->dateTime("SubscribeDate");
            $table->dateTime("SubscribeEndDate");
            $table->boolean("IsTakenContainer");
            $table->boolean("IsSubscribed");
            $table->integer("Account_id");
            $table->integer("program_id")->nullable();
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
        Schema::dropIfExists('players');
    }
};
