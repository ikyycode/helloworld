<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'GILA BELAJAR',
                'slug' => 'gila-belajar',
                'price' => '500',
                'created_at' => date('Y-m-d H:i:s', time ()),
                'updated_at' => date('Y-m-d H:i:s', time ()),
            ],
            [
                'title' => 'BARU MULAI',
                'slug' => 'baru-mulai',
                'price' => '150',
                'created_at' => date('Y-m-d H:i:s', time ()),
                'updated_at' => date('Y-m-d H:i:s', time ()),
            ],
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
