<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        User::factory()->create([
            "name" => "test",
            "email" => "test@gmail.com",
            "password" => "test1234"
        ]);

        Admin::factory()->create([
            "email" => "mike@gmail.com",
            "password" => "test1234"
        ]);
        Product::factory(10)->create();
    }
}
