<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin',]);
        $role2 = Role::create(['name' => 'Operation',]);

        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver el dashboard',
                            ])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.users.index',
                                        'description' => 'Ver listado de usuarios',
                                        ])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit',
                                        'description' => 'Asignar un rol a un usuario',
                                    ])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.roles.index',
                                        'description' => 'Ver listado de roles',
                                        ])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.clientes.index',
                                        'description' => 'Ver listado de clientes',
                                    ])->syncRoles([$role1]);

        
    }
}
