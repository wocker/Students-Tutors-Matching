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
        Schema::table('learning_styles', function (Blueprint $table) {

            $table->string("description_en")->after("image")->nullable();
            $table->string("description_es")->after("description_en")->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learning_styles', function (Blueprint $table) {

            $table->dropColumn("description_en");
            $table->dropColumn("description_es");


        });
    }
};
