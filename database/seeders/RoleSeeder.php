<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Role1 = Role::create (['name' => 'Admin']);
        $Role2 = Role::create (['name' => 'Estudiante']);
        $Role3 = Role::create (['name' => 'Secretaria']);

        Permission ::create(['name'=> 'home'])

    }
}
