<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //     // User::factory(10)->create();

    Berita::factory(5)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // 

    //  DB::table('users')->insert([
    //         'name' =>"evanda",
    //         'email' => 'elvanda@gmail.com',
    //         'password' => Hash::make('cia023451'),
    //     ]);

    // DB::table('beritas')->insert([
    //     'judul' => 'Pemerintah Membakar Hutan',
    //     'slug' => 'pemerintah-membakar-hutan',
    //     'penulis' => 'Admin',
    //     'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',


    // ]);

    }
}