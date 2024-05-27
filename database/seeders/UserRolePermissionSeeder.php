<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create Permissions
         Permission::create(['name' => 'view role']);
         Permission::create(['name' => 'create role']);
         Permission::create(['name' => 'update role']);
         Permission::create(['name' => 'delete role']);
 
         Permission::create(['name' => 'view permission']);
         Permission::create(['name' => 'create permission']);
         Permission::create(['name' => 'update permission']);
         Permission::create(['name' => 'delete permission']);
 
         Permission::create(['name' => 'view user']);
         Permission::create(['name' => 'create user']);
         Permission::create(['name' => 'update user']);
         Permission::create(['name' => 'delete user']);
 
         Permission::create(['name' => 'view product']);
         Permission::create(['name' => 'create product']);
         Permission::create(['name' => 'update product']);
         Permission::create(['name' => 'delete product']);
 
 
         // Create Roles
         $superAdminRole = Role::create(['name' => 'super-admin']); //as super-admin
         $icdRole = Role::create(['name' => 'icd']);
         $terminalRole = Role::create(['name' => 'terminal']);
         $userRole = Role::create(['name' => 'user']);
 
         // Lets give all permission to super-admin role.
         $allPermissionNames = Permission::pluck('name')->toArray();
 
         $superAdminRole->givePermissionTo($allPermissionNames);
 
         // Let's give few permissions to admin role.
         $icdRole->givePermissionTo(['create role', 'view role', 'update role']);
         $icdRole->givePermissionTo(['create permission', 'view permission']);
         $icdRole->givePermissionTo(['create user', 'view user', 'update user']);
         $icdRole->givePermissionTo(['create product', 'view product', 'update product']);

    
 
         // Let's Create User and assign Role to it.
 
         $superAdminUser = User::firstOrCreate([
                     'email' => 'superadmin@gmail.com',
                 ], [
                     'name' => 'Super Admin',
                     'email' => 'superadmin@gmail.com',
                     'password' => Hash::make ('12345678'),
                 ]);
 
         $superAdminUser->assignRole($superAdminRole);
 
 
         $adminUser = User::firstOrCreate([
                             'email' => 'icd@gmail.com'
                         ], [
                             'name' => 'icd',
                             'email' => 'icd@gmail.com',
                             'password' => Hash::make ('12345678'),
                         ]);
 
         $adminUser->assignRole($icdRole);
 
 
         $terminalUser = User::firstOrCreate([
                             'email' => 'terminal@gmail.com',
                         ], [
                             'name' => 'terminal',
                             'email' => 'terminal@gmail.com',
                             'password' => Hash::make('12345678'),
                         ]);
 
         $terminalUser->assignRole($terminalRole);
     }
    
}
