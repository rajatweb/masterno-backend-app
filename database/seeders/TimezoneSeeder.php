<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Timezone;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'timezone' => $faker->timezone()
            ];
        }

        $chunks = array_chunk($data, 10);

        foreach($chunks as $chunk) {
            Timezone::insert($chunk);
        }
    }
}
