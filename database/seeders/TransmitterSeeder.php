<?php

namespace Database\Seeders;

use App\Models\Transmitter;
use Illuminate\Database\Seeder;

class TransmitterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transmitter::create([

            'ruc' => '1755154679001',
            'razon_social' => 'Martinez Hidalgo Yoelvys',
            'nombre_comercial' => 'Softpro',
            'direccion_matriz' => 'Pichincha Quito de las Toronjas E11-116 y De las Hortensias',
            'ambiente' => 'pruebas',
            'tipo_emision' => 'normal',
            'contribuyente' => '',
            'obligado_contabilidad' => 'no',
            'contraseña_firma' => '123456',
            'servidor_correo' => 'digitalfac.click',
            'correo_remitente' => 'facturacionelectronica@digitalfac.click',
            'contraseña_correo' => '123456',
            'puerto' => '465',
            'ssl' => 'si',
            'regimen_microempresa' => 'no',
            'resolucion_agente_retencion' => '',
            'logo' => '',
            'firma' => '',
            'estado' => 'si',
            'ruta_autorizados' => '/home/ubuntu/firmaelectronica',
            'fecha_inicio_plan' => '2022-07-22',
            'fecha_fin_plan' => '2022-08-22',
            'plan_id' => 1,
            'user_id' => 1,
            'user_update' => 1
        ]);

        Transmitter::create([

            'ruc' => '0930342878001',
            'razon_social' => 'Jose Israel Alava Vera',
            'nombre_comercial' => 'Jose Israel Alava Vera',
            'direccion_matriz' => 'Florida',
            'ambiente' => 'produccion',
            'tipo_emision' => 'normal',
            'contribuyente' => '',
            'obligado_contabilidad' => 'no',
            'contraseña_firma' => '123456',
            'servidor_correo' => 'gmail.com',
            'correo_remitente' => 'jose.alava.v@gmail.com',
            'contraseña_correo' => '123456',
            'puerto' => '21',
            'ssl' => 'si',
            'regimen_microempresa' => 'si',
            'resolucion_agente_retencion' => '',
            'logo' => '',
            'firma' => '',
            'estado' => 'no',
            'ruta_autorizados' => '/home/ubuntu/firmaelectronica',
            'fecha_inicio_plan' => '2022-07-22',
            'fecha_fin_plan' => '2022-08-22',
            'plan_id' => 1,
            'user_id' => 1,
            'user_update' => 1
        ]);
    }
}
