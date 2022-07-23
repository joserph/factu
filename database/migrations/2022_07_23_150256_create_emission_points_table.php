<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmissionPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emission_points', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('codigo');
            $table->integer('secuencial_factura');
            $table->integer('secuencial_liquidacion_compra');
            $table->integer('secuencial_nota_credito');
            $table->integer('secuencial_nota_debito');
            $table->integer('secuencial_guia');
            $table->integer('secuencial_retencion');
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->unsignedBigInteger('establishment_id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_update');

            $table->foreign('establishment_id')->references('id')->on('establishments');
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
        Schema::dropIfExists('emission_points');
    }
}
