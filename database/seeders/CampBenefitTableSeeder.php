<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campbenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Imac Pro',
            ],
            [
                'camp_id' => 1,
                'name' => 'mentorin program',
            ],
            [
                'camp_id' => 1,
                'name' => 'final project',
            ],
            [
                'camp_id' => 1,
                'name' => 'offline course',
            ],
            [
                'camp_id' => 1,
                'name' => 'future job',
            ],
            [
                'camp_id' => 1,
                'name' => 'premium design kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'website builder',
            ],
            [
                'camp_id' => 2,
                'name' => 'Mentoring program',
            ],
            [
                'camp_id' => 2,
                'name' => 'final project',
            ],
            [
                'camp_id' => 2,
                'name' => 'offline course',
            ],

        ];
        Campbenefit::insert($campBenefits);
    }
}
