<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->string('rfc',13)->unique();
            $table->string('tel_empresa',13);
            $table->string('vendedor',100);
            $table->string('tel_vendedor',13);
            $table->string('observaciones',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('proveedores');
    }
}
