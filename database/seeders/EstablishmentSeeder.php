<?php

namespace Database\Seeders;

use App\Models\Establishment;
use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment::create([

            'nombre' => 'Estab',
            'codigo' => '001',
            'url' => 'http://prueba.com',
            'nombre_comercial' => 'Prueba',
            'direccion' => 'caa',
            'correo_cco' => 'alexander2714@gmail.com',
            'estatus' => 'activo',
            'logo' => '',
            'transmitter_id' => 1,
            'user_id' => 1,
            'user_update' => 1
        ]);

        Establishment::create([

            'nombre' => 'Matriz',
            'codigo' => '001',
            'url' => 'hhtps://atconsulting.com',
            'nombre_comercial' => 'At Consulting',
            'direccion' => 'Cacha y Geovanny Calles',
            'correo_cco' => '',
            'estatus' => 'activo',
            'logo' => '',
            'transmitter_id' => 2,
            'user_id' => 1,
            'user_update' => 1
        ]);
    }
}
