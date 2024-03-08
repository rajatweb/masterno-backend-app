<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\PatientMealPlanning;

class PatientMealPlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $patientMealPlanning = collect(PatientMealPlanning::all()->modelKeys());
        $data = [];

        for($i = 0; $i < 500; $i++) {
            $data[] = [
                'patient_id' => $faker->uuid(),
                'planned_date' => $faker->unique()->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format("Y-m-d"),
                'total_calories' => $faker->numberBetween(1500, 3000),
                'total_fats' => $faker->numberBetween(10, 80),
                'total_carbs' => $faker->numberBetween(900, 1300),
                'total_proteins' => $faker->numberBetween(1000, 2000),
                'is_active' => $faker->boolean,
                'created_by' =>  $faker->uuid(),
                // 'created_by' =>  PatientMealPlanning::all()->patient_id,
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format("Y-m-d"),
                'updated_by' => $faker->uuid(),
                'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format("Y-m-d"),
            ];
        }

        $chunks = array_chunk($data, 1000);

        foreach($chunks as $chunk) {
            PatientMealPlanning::insert($chunk);
        }
    }
}
