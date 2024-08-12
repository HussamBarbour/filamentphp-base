<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $superadmin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456789')
        ]);
        $superadmin_role = Role::create(['name' => 'super_admin']);
        $superadmin->assignRole([$superadmin_role->id]);
    }
}
