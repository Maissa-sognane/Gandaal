<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->integer('coefficient')->nullable(true);
            $table->float('note_devoir_1')->nullable(true);
            $table->float('note_devoir_2')->nullable(true);
            $table->float('moyenne_devoir')->nullable(true);
            $table->float('note_examen')->nullable(true);
            $table->float('moyenne')->nullable(true);
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
        Schema::dropIfExists('matieres');
    }
}
