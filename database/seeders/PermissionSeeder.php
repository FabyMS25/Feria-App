<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
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
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

    }
}
