<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Balai Kota Malang',
                'description' => 'Balai Kota Malang adalah salah satu bangunan peninggalan pemerintah 
                kolonial Hindia Belanda. Bangunan ini terletak di lingkaran jalan Tugu Kota
                Malang dengan arsitektur kolonial Belanda'
            ]
            ];
        DB::table('homes')->insert($data);
    }
}
