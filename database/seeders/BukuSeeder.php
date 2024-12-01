<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) { // Menambahkan 50 data random
            Buku::create([
                'merkbuku' => substr($faker->words(3, true), 0, 30), // Batasi hingga 30 karakter
                'stockbuku' => $faker->numberBetween(1, 100), // Stok random antara 1-100
                'tersedia' => $faker->randomElement(['Y', 'N']), // Tersedia: Y atau N
            ]);
        }
    }
}
