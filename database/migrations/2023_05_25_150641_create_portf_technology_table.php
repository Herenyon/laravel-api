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
        Schema::create('portf_technology', function (Blueprint $table) {

            // $table->id();
            $table->foreignId('portf_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();

            // $table->unsignedBigInteger('portf_id');
            // $table->foreign('portf_id')->references('id')->on('portfs')->cascadeOnDelete();

            // $table->unsignedBigInteger('technology_id');
            // $table->foreign('technology_id')->references('id')->on('technologies')->cascadeOnDelete();
            $table->primary(['portf_id', 'technology_id']);
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
        Schema::dropIfExists('portf_technology');
    }
};
