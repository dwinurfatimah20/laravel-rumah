<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelIvents;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masyarakat')->insert([
            "nik" => Srt::random(16),
            "nama" => Srt::random(35),
            "username" => Srt::random(25),
            "password" => substr(md5(Srt::random(32)), 0, 32),
            "telp" => Srt::random(13),
        ]);
    }
}
