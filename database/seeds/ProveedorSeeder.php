<?php

use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'nombre'=>'Desarollo Comercial Abarrotero, S.A. de C.V.',
            'rfc'=>'AUPS831216R89',
            'tel_empresa'=>'(753)5350151',
            'vendedor'=>'Luis Perez',
            'tel_vendedor'=>'(753)5350151',
            'observaciones'=>'S/O',
        ]);
    }
}
