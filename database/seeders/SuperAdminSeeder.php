<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@joserph.com',
            'password' => bcrypt('123456789')
        ]);
        
        $rol = Role::create(['name' => 'Super Administrador']);

        $permissions = Permission::pluck('id', 'id')->all();

        $rol->syncPermissions($permissions);

        $user->assignRole([$rol->id]);
    }
}
