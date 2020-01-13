<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('prenom', 100);
            $table->string('nom', 100);
            $table->string('genre');
            $table->date('date_naissance');
            $table->string('lieu_naissance', 100);
            $table->string('Telephone')->nullable(true);
            $table->integer('Profit')->nullable(true);
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('user_id')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('eleve');
    }
}
