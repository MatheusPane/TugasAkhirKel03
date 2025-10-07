<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefAgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_agama')->insertOrIgnore([
            ['nama' => 'Islam', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kristen', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Katholik', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Hindu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Buddha', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Konghucu', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
