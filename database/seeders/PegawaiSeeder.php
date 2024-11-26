<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            // Batasi panjang data untuk 'pegawai_jabatan' menjadi maksimum 50 karakter
            $jobTitle = substr($faker->jobTitle, 0, 50);

            DB::table('belajar_laravel')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $jobTitle,
                'pegawai_umur' => $faker->numberBetween(25, 40),
                'pegawai_alamat' => $faker->address
            ]);
        }
    }
}
