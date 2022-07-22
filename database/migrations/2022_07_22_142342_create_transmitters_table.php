<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransmittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transmitters', function (Blueprint $table) {
            $table->id();

            $table->string('ruc')->unique();
            $table->string('razón_social');
            $table->string('nombre_comercial');
            $table->string('direccion_matriz');
            $table->enum('ambiente', ['pruebas', 'produccion']);
            $table->enum('tipo_emision', ['normal', 'indisponibilidad']);
            $table->string('contribuyente')->nullable();
            $table->enum('obligado_contabilidad', ['no', 'si']);
            $table->string('contraseña_firma');
            $table->string('servidor_correo');
            $table->string('correo_remitente');
            $table->string('contraseña_correo');
            $table->string('puerto');
            $table->string('ssl');
            $table->string('regimen_microempresa');
            $table->string('resolucion_agente_retencion');
            $table->string('logo')->nullable();
            $table->string('firma')->nullable();
            $table->string('estado');
            $table->string('ruta_autorizados');
            $table->date('fecha_inicio_plan');
            $table->date('fecha_fin_plan');

            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_update');

            $table->foreign('plan_id')->references('id')->on('plans');
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
        Schema::dropIfExists('transmitters');
    }
}
