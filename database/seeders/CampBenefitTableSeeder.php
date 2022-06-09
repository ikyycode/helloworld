<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Laptop ROG 32GB RYZEN'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Konsultasi'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Sertifikat'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Video'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Oppertunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Konsultasi'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Sertifikat'
            ],
            [
                'camp_id' => 2,
                'name' => 'Online Course Video'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
