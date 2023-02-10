<?php

namespace Database\Seeders;

use App\Models\Tip;
use Illuminate\Database\Seeder;

class TipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tip::create([
            'tip' => 'Gitara'
        ]);

        Tip::create([
            'tip' => 'Bas gitara'
        ]);

        Tip::create([
            'tip' => 'Klavir'
        ]);

        Tip::create([
            'tip' => 'Violina'
        ]);

        Tip::create([
            'tip' => 'Flauta'
        ]);
    }
}
