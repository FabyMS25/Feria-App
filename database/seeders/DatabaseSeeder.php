<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\Department;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'is_admin' => true
        ])->assignRole('Admin');

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin-ecomerce@gmail.com',
            'password' => Hash::make('admin123')
        ])->assignRole('Admin');

        User::factory()->create([
            'name' => 'Titular',
            'email' => 'titular-ecomerce@gmail.com',
            'password' => Hash::make('12345678')
        ])->assignRole('Titular');

        User::factory()->create([
            'name' => 'Famy',
            'email' => 'famy-ecomerce@gmail.com',
            'password' => Hash::make('12345678')
        ])->assignRole('Titular');


        Client::factory(10)->create();

        // Post::factory(10)->create();
    }
}
