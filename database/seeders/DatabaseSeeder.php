<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::create([
            'category'=> 'Ternak Lele'
        ]);
        Category::create([
            'category'=> 'Ternak Kambing'
        ]);
        Category::create([
            'category'=> 'Ternak Sapi'
        ]);
        Category::create([
            'category'=> 'Pertanian'
        ]);
        Category::create([
            'category'=> 'Kuliner'
        ]);
        Category::create([
            'category'=> 'Kerajinan'
        ]);
        User::create([
            'name'=> 'admin',
            'username'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // \App\Models\User::factory(10)->create();

        
    }
}
