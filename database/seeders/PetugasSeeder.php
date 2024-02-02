<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelIvents;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            "id_petugas" => random_int(1,20),
            "nama_petugas" => Srt::random(35),
            "username" => Srt::random(25),
            "password" => substr(md5(Srt::random(32)), 0, 32),
            "telp" => Srt::random(13),
            "level" => "admin",
        ]);
    }
}
