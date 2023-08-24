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

            $table->text("info_en")->nullable()->after("type");
            $table->text("info_es")->nullable()->after("info_en");

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
            $table->dropColumn("info_en");
            $table->dropColumn("info_es");
        });
    }
};
