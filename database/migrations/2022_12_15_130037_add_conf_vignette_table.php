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
        Schema::table('vignettes', function (Blueprint $table) {
            $table->string('legende');
            $table->string('description');
            $table->string('url');
            $table->boolean('statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vignettes', function (Blueprint $table) {
            $table->dropDown('legende');
            $table->dropDown('description');
            $table->dropDown('url');
            $table->dropDown('statut');
        });
    }
};
