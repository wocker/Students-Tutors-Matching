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
        Schema::create('learning_style_recommended_techniques', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("learning_style_id");
            $table->foreign("learning_style_id")->references("id")->on("learning_styles")->onDelete("cascade");

            $table->string("technique_en")->nullable();
            $table->string("technique_es")->nullable();

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
        Schema::dropIfExists('learning_style_recommended_techniques');
    }
};
