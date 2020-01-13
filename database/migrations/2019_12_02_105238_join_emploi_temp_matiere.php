<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinEmploiTempMatiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_temp_matiere', function (Blueprint $table){

            $table->bigIncrements('id');
            $table->unsignedInteger('emploi_temp_id');
            $table->unsignedInteger('matiere_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploi_temp_matiere');
    }
}
