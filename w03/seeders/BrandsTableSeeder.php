<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง brands
        DB::table('brands')->insert([
            ['brand_name' => 'Galaxy Nova'],
            ['brand_name' => 'ZenFone Horizon'],
            ['brand_name' => 'Pixel Spectra'],
            ['brand_name' => 'Xperia Nebula'],
            ['brand_name' => 'OnePlus Quantum'],
            ['brand_name' => 'Lumia Aurora'],
            ['brand_name' => 'Moto Fusion'],
            ['brand_name' => 'Redmi Celestial'],
            ['brand_name' => 'Honor Eclipse'],
            ['brand_name' => 'Vivo Stellar'],
        ]);
    }
}
