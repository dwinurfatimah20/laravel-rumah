<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelIvents;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nik = DB::table('masyarakat')->insertGetId([
            "nik" => "3215014610060001",
            "nama" => "Dwinurfatimah",
            "usermane" => "dwinur",
            "password" => substr(md5("dwinur"), 0, 32),
            "telp" => "087733601599",
        ]);
    }
}
