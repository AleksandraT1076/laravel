<?php

namespace Database\Seeders;

use App\Models\Proizvodjac;
use Illuminate\Database\Seeder;

class ProizvodjacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvodjac::create([
            'proizvodjac' => 'Stagg'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Boss'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Fender'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Boston'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Epiphone'
        ]);

    }
}
