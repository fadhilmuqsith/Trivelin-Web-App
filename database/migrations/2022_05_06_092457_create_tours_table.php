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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longText("description");
            $table->longText("travel_route");
            $table->longText("itinary");
            $table->string("price");
            $table->longText("price_detail");
            $table->string("image")->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('kotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
