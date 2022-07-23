<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([

            'nombre' => 'Virginia Rosario Martinez',
            'tipo_identificacion' => 1,
            'identificacion' => '1721847067001',
            'direccion' => 'Rafael Calvache y Abuga',
            'celular' => '0992526875',
            'correo' => 'vrosario.atconsulting@gmail.com',
            'user_id' => 1,
            'user_update' => 1
        ]);

        Client::create([

            'nombre' => 'Baño Cruz Daysi Paola',
            'tipo_identificacion' => 1,
            'identificacion' => '1719009712001',
            'direccion' => 'Los fundadores Lote 118B y Sebastian de Benalcazar',
            'celular' => '0987842604',
            'correo' => 'info@ecuafirmas.com',
            'user_id' => 1,
            'user_update' => 1
        ]);
    }
}
