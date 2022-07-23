<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([

            'numero_comprobante' => '100000',
            'precio' => '30',
            'periodo' => 'anual',
            'detalle' => 'Plan Anual',
            'estatus' => 'activo',
            'user_id' => 1,
            'user_update' => 1
        ]);

        Plan::create([

            'numero_comprobante' => '100',
            'precio' => '10',
            'periodo' => 'mensual',
            'detalle' => 'Plan Mensual',
            'estatus' => 'activo',
            'user_id' => 1,
            'user_update' => 1
        ]);
    }
}
