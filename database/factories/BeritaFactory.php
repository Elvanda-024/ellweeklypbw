<?php
namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    public function definition(): array
    {
        $fakerID = \Faker\Factory::create('id_ID');

        $title = $fakerID->sentence(mt_rand(5, 12));

        return [
            'judul' => $title,
            'slug' => Str::slug($title),
            'penulis' => $fakerID->name(),
            'konten' => $fakerID->paragraphs(mt_rand(3, 6), true),
        ];
    }
}
