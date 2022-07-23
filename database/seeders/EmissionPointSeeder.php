<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmissionPoint;

class EmissionPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmissionPoint::create([

            'nombre' => 'ptoEmi',
            'codigo' => '001',
            'secuencial_factura' => 5,
            'secuencial_liquidacion_compra' => 0,
            'secuencial_nota_credito' => 0,
            'secuencial_nota_debito' => 0,
            'secuencial_guia' => 0,
            'secuencial_retencion' => 0,
            'estatus' => 'activo',
            'establishment_id' => 1,
            'user_id' => 1,
            'user_update' => 1
        ]);

        EmissionPoint::create([

            'nombre' => 'facturas electronicas',
            'codigo' => '001',
            'secuencial_factura' => 5,
            'secuencial_liquidacion_compra' => 0,
            'secuencial_nota_credito' => 4,
            'secuencial_nota_debito' => 4,
            'secuencial_guia' => 2,
            'secuencial_retencion' => 1,
            'estatus' => 'activo',
            'establishment_id' => 1,
            'user_id' => 1,
            'user_update' => 1
        ]);
    }
}
