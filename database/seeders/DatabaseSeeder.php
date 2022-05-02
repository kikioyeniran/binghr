<?php

namespace Database\Seeders;

use App\Models\User;
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
        // $users = User::factory()
        //     ->count(25)
        //     ->create();
        $this->call([
            RoleSeeder::class,
            PermisionsSeeder::class
        ]);
    }
}
