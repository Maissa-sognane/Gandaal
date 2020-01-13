<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinCahierNoteMatiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cahier_note_matiere', function (Blueprint $table){

            $table->bigIncrements('id');
            $table->unsignedInteger('cahier_note_id');
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
        Schema::dropIfExists('cahier_note_matiere');
    }
}
