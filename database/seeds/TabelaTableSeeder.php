<?php

use Illuminate\Database\Seeder;
use App\Tabela;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TabelaTableSeeder extends Seeder
{

    public function run()
    {

        $faker = Faker::create();

        foreach(range(1,200) as $i) {
            Tabela::create([
                'codigo' => $faker->randomNumber($nbDigits = NULL),
                'descricao' => $faker->sentence(),
                'atribuicao' => $faker->word,
                'emolumentos' => $faker->randomFloat(2, 0, 10),
                'fdj' => $faker->randomFloat(2, 0, 10),
                'frmp' => $faker->randomFloat(2, 0, 10),
                'fcrcpn' => $faker->randomFloat(2, 0, 10),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
