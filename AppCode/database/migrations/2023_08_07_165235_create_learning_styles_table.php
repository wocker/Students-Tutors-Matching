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
        Schema::create('learning_styles', function (Blueprint $table) {
            $table->id();

            $table->string("style_en")->nullable();

            $table->string("style_es")->nullable();

            $table->enum("type", ["student", "tutor"])->default("student");

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
        Schema::dropIfExists('learning_styles');
    }
};
