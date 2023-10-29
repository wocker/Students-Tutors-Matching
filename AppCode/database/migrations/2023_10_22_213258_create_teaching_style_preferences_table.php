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
        Schema::create('teaching_style_preferences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('learning_style_id')->constrained();

            $table->unsignedBigInteger('teaching_style_id');
            $table->foreign('teaching_style_id')->references('id')->on('learning_styles');

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
        Schema::dropIfExists('teaching_style_preferences');
    }
};
