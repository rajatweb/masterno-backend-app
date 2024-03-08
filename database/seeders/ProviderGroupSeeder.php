<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\ProviderGroup;

class ProviderGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $faker->word()
            ];
        }

        $chunks = array_chunk($data, 1000);

        foreach($chunks as $chunk) {
            ProviderGroup::insert($chunk);
        }

    }
}
