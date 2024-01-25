<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        foreach ($cars as $car ) {
            $car=new Car();
            $car->marca=$car['id'];
            $car->marca=$car['marca'];
            $car->marca=$car['modello'];
            $car->marca=$car['anno'];
            $car->marca=$car['euro'];
            $car->save();

        }
    }
}
