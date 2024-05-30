<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@nex.eco.br',
            'password' => bcrypt('123456789'),
        ]);
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'Usuario',
        ]);
        Permission::create([
            'name' => 'permission_edit',
        ]);
        Permission::create([
            'name' => 'user_edit',
        ]);
        Permission::create([
            'name' => 'role_edit',
        ]);
        Permission::create([
            'name' => 'machine_edit',
        ]);

        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => '1',
                'role_id' => '1',
            ]
        ]);
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => '2',
                'role_id' => '1',
            ]
        ]);
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => '3',
                'role_id' => '1',
            ]
        ]);
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => '4',
                'role_id' => '1',
            ]
        ]);
        DB::table('model_has_roles')->insert([
            [
                'role_id' => '1',
                'model_type' => 'App\Models\User',
                'model_id' => '1'
            ]
        ]);

    }
}
