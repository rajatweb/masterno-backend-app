<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        City::truncate();

        $cities = [
            ['state_id'=> 1,'name' => 'Amlabad'],
            ['state_id'=> 1,'name' => 'Bandh Dih'],
            ['state_id'=> 2, 'name' => 'Bandhgora'],
            ['state_id'=> 2, 'name' => 'Bhojudih'],
            ['state_id'=> 2, 'name' => 'Bokaro Steel City'],
            ['state_id'=> 3, 'name' => 'Chandrapura'],
            ['state_id'=> 4, 'name' => 'Chas'],
            ['state_id'=> 5, 'name' => 'Dugda']
          ];

      foreach ($cities as $key => $data) {
        City::create($data);
      }
      
    }
}
