<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id')->references('id')->on('proveedores');
            $table->string('no_factura');
            $table->double('cantidad');
            $table->integer('no_cheque');
            $table->date('fecha_cheque');
            $table->date('fecha_cobro');
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
        Schema::drop('polizas');
    }
}
