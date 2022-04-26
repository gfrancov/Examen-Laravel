<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciutats;

class CiutatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciutats = [
            array('nom' => 'Badalona', 'n_habitants' => '240000'),
            array('nom' => 'Barcelona', 'n_habitants' => '3000000'),
            array('nom' => 'Hospitalet', 'n_habitants' => '500000')
        ];

        foreach($ciutats as $ciutat) {
            Ciutats::create($ciutat);
        }
    }
}
