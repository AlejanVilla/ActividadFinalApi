<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Lector']);

        Permission::create(['name' => 'api.categories.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'api.categories.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'api.categories.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'api.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'api.posts.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'api.posts.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'api.posts.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'api.posts.destroy'])->syncRoles([$role1]);


    }
}
