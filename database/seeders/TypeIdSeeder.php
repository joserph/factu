<?php

namespace Database\Seeders;

use App\Models\TypeId;
use Illuminate\Database\Seeder;

class TypeIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeIds = [
            // Tipo de Identificacion
            'RUC',
            'CEDULA',
            'PASAPORTE',
            'CONSUMIDOR FINAL',
            'IDENTIFICACION DEL EXTERIOR',
            'PLACA',
        ];

        foreach($typeIds as $typeId)
        {
            TypeId::create([
                'nombre' => $typeId,
                'user_id' => 1,
                'user_update' => 1
            ]);
        }
    }
}
