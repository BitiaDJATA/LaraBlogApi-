<?php

namespace Database\Seeders;

use App\Models\Personne;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = \Faker\Factory::create(); 
        for($i=0;$i<100;$i++){
            $personne =New Personne();
            $personne->nom = $faker->name;
            $personne->information = $faker->paragraph(10); 
            $personne->age = $faker->numberBetween(18,40);
            $personne->activer = $faker->boolean;
            $personne->save();  

            
        }
    }
}
