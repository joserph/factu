<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('codigo');
            $table->string('url')->nullable();
            $table->string('nombre_comercial');
            $table->string('direccion');
            $table->string('correo_cco')->nullable();
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->string('logo');

            $table->unsignedBigInteger('transmitter_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_update');

            $table->foreign('transmitter_id')->references('id')->on('transmitters');
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
        Schema::dropIfExists('establishments');
    }
}
