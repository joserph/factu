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
            // Operaciones sobre tabla permision
            'ver-permision',
            'crear-permision',
            'editar-permision',
            'borrar-permision',
            // Operaciones sobre tabla user
            'ver-user',
            'crear-user',
            'editar-user',
            'borrar-user',
        ];

        foreach($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
