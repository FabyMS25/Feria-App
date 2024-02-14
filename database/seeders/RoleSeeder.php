<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $titular = Role::create(['name' => 'Titular']);
        $employee = Role::create(['name' => 'Employee']);

        // $admin->syncPermissions(Permission::all());
        $admin->givePermissionTo([
            'view-any Permission',
            'view Permission',
            'create Permission',
            'update Permission',
            'delete Permission',

            'view-any Role',
            'view Role',
            'create Role',
            'update Role',
            'delete Role',

            'view-any Country',
            'view Country',
            'create Country',
            'update Country',
            'delete Country',

            'view-any City',
            'view City',
            'create City',
            'update City',

            'view-any State',
            'view State',
            'create State',
            'update State',
            'delete State',

            'view-any Market',
            'view Market',
            'create Market',
            'update Market',
            'delete Market',

            'view-any User',
            'view User',
            'create User',
            'update User',
            'delete User',

            'view-any Client_type',
            'view Client_type',
            'create Client_type',
            'update Client_type',
            'delete Client_type',

            'view-any CommercialCategory',
            'view CommercialCategory',
            'create CommercialCategory',
            'update CommercialCategory',
            'delete CommercialCategory',

            'view-any CommercialCategory_Company',
            'view CommercialCategory_Company',
            'create CommercialCategory_Company',
            'update CommercialCategory_Company',
            'delete CommercialCategory_Company',

            'view-any Post_category',
            'view Post_category',
            'create Post_category',
            'update Post_category',
            'delete Post_category',

            'view-any Company',
            'view Company',
            'create Company',
            'update Company',
            'delete Company',

            'view-any Store',
            'view Store',
            'create Store',
            'update Store',
            'delete Store',

            'view-any Client',
            'view Client',
            'create Client',
            'update Client',
            'delete Client',

            'view-any Employee',
            'view Employee',
            'create Employee',
            'update Employee',
            'delete Employee',

            'view-any Post',
            'view Post',
            'create Post',
            'update Post',
            'delete Post',

            'view-any Post_media',
            // 'view Post_media',
            // 'create Post_media',
            // 'update Post_media',
            // 'delete Post_media',
        ]);

        $titular->givePermissionTo([
            'view Company',
            'create Company',
            'update Company',
            'delete Company',

            'view Store',
            'create Store',
            'update Store',
            'delete Store',

            'view Client',

            'view Employee',
            'create Employee',
            'update Employee',
            'delete Employee',

            'view Post',
            'create Post',
            'update Post',
            'delete Post',

            'view CommercialCategory',
            'create CommercialCategory',

            'view Market',
            'create Market',
            'update Market',
        ]);

        $employee->givePermissionTo([

            'view Client',

            'view Store',
            'create Store',
            'update Store',

            'view Post',
            'create Post',
            'update Post',
            'delete Post',
        ]);


        // Seed permissions
        // $this->call(PermissionSeeder::class);
        // // Create a superadmin role
        // $AdminRole = Role::create(['name' => 'Admin']);
        // // Create and assign all permissions to the superadmin role
        // $allPermissions = Permission::pluck('name')->toArray();
        // $AdminRole->syncPermissions($allPermissions);
    }
}
