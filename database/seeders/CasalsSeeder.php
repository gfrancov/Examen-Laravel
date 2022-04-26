<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Casals;

class CasalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $casals = [
            array('nom' => 'Casal Nou Barris', 'data_inici' => '2022-06-01', 'data_final' => '2022-07-25', 'n_places' => 40, 'id_ciutat' => 2),
            array('nom' => 'Casal Pomar', 'data_inici' => '2022-06-06', 'data_final' => '2022-08-10', 'n_places' => 13, 'id_ciutat' => 1),
        ];

        foreach($casals as $casal) {
            Casals::create($casal);
        }
    }
}
