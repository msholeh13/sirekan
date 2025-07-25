<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'      => 'Admin Sirekan',
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin'),
        ]);

        $this->call([
            FoodsTableSeeder::class,
            WeightSeeder::class,
        ]);
    }
}
