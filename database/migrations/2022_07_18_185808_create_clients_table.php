<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->unsignedBigInteger('tipo_identificacion');
            $table->string('identificacion');
            $table->string('direccion');
            $table->string('celular');
            $table->string('correo');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_update');

            $table->foreign('tipo_identificacion')->references('id')->on('type_ids');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_update')->references('id')->on('users');

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
        Schema::dropIfExists('clients');
    }
}
