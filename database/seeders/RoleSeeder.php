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
            ['name' => 'super_admin'],
            ['name' => 'admin'],
            ['name' => 'employee'],
            ['name' => 'hr_admin'],
            // ['id' => 4, 'name' => 'distributor'],
            // ['id' => 5, 'name' => 'supplier'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
