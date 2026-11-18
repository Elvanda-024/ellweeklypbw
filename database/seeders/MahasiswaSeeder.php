<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Dimas',
                'nim' => '13242520025',
                'prodi' => 'S1 Teknologi Informasi',
                'email' => 'dimas@gmail.com',
                'nohp' => '087777777777',
                'foto' => 'dimas.jpg',
            ],
            [
                'nama' => 'Amin',
                'nim' => '13242520026',
                'prodi' => 'S1 Teknologi Informasi',
                'email' => 'amin@gmail.com',
                'nohp' => '086666666666',
                'foto' => 'amin.jpg',
            ],
        ]);
    }
}
