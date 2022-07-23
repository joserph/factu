<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            // Operaciones sobre tabla permiso
            'ver-permiso',
            'crear-permiso',
            'editar-permiso',
            'borrar-permiso',
            // Operaciones sobre tabla usuario
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            // Operaciones sobre tabla identificacion
            'ver-identificacion',
            'crear-identificacion',
            'editar-identificacion',
            'borrar-identificacion',
            // Operaciones sobre tabla cliente
            'ver-cliente',
            'crear-cliente',
            'editar-cliente',
            'borrar-cliente',
            // Operaciones sobre tabla establecimiento
            'ver-establecimiento',
            'crear-establecimiento',
            'editar-establecimiento',
            'borrar-establecimiento',
            // Operaciones sobre tabla plan
            'ver-plan',
            'crear-plan',
            'editar-plan',
            'borrar-plan',
            // Operaciones sobre tabla emisor
            'ver-emisor',
            'crear-emisor',
            'editar-emisor',
            'borrar-emisor',
        ];

        foreach($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
