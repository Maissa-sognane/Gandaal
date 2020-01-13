<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('prenom', 100)->nullable(true);
            $table->string('nom', 100)->nullable(true);
            $table->date('date_naissance')->nullable(true);
            $table->string('lieu_naissance')->nullable(true);
            $table->string('Telephone')->nullable(true);
            $table->string('genre')->nullable(true);
            $table->unsignedInteger('classe_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('responsables');
    }
}
