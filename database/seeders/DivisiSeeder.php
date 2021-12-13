<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisi')->insert([
            [
                'nama_divisi' => 'it',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_divisi' => 'accounting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
