<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SeederTablePermissions::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(TypeIdSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(TransmitterSeeder::class);
        $this->call(EstablishmentSeeder::class);
        $this->call(EmissionPointSeeder::class);
    }
}
