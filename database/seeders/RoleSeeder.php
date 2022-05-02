<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'CEO and Founder'],
            ['name' => 'Team Lead'],
            ['name' => 'HR'],
            ['name' => 'App Designer'],
            ['name' => 'Web Developer'],
            // ['id' => 4, 'name' => 'distributor'],
            // ['id' => 5, 'name' => 'supplier'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
