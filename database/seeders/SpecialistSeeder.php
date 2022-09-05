<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '250000',
            ],
            [
                'name' => 'Dentist',
                'price' => '240000',
            ],
            [
                'name' => 'Endodontics',
                'price' => '230000',
            ],
            [
                'name' => 'Gastroenterology',
                'price' => '220000',
            ],
            [
                'name' => 'General Surgery',
                'price' => '210000',
            ],
            [
                'name' => 'Gynecology',
                'price' => '200000',
            ],
            [
                'name' => 'Neurology',
                'price' => '190000',
            ],
            [
                'name' => 'Ophthalmology',
                'price' => '180000',
            ],
            [
                'name' => 'Orthopedics',
                'price' => '170000',
            ],
            [
                'name' => 'Pediatrics',
                'price' => '160000',
            ],
            [
                'name' => 'Plastic Surgery',
                'price' => '150000',
            ],
            [
                'name' => 'Psychiatry',
                'price' => '140000',
            ],
            [
                'name' => 'Urology',
                'price' => '130000',
            ],
            [
                'name' => 'Vascular Surgery',
                'price' => '120000',
            ],
        ];

        // this array specialist will be insert to table 'specialist'
        Specialist::insert($specialist);
    }
}
