<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => 'Super Admin', 'read' => true, 'write' => true, 'delete' => true],
            ['name' => 'Admin', 'read' => true, 'write' => false, 'delete' => false],
            ['name' => 'Employee', 'read' => true, 'write' => false, 'delete' => false],
            ['name' => 'HR Admin', 'read' => true, 'write' => true, 'delete' => true],
            // ['id' => 4, 'name' => 'distributor'],
            // ['id' => 5, 'name' => 'supplier'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
