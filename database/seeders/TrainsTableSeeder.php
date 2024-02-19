<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->randomElement(['Roma', 'Milano', 'Torino']);
            $train->stazione_di_arrivo = $faker->randomElement(['Firenze', 'Bologna', 'Venezia']);
            $train->orario_di_partenza = $faker->dateTimeBetween('-3 days', '+3 days');
            $train->orario_di_arrivo = $faker->dateTimeBetween('+1 days', '+4 days');
            $train->codice_treno = 'T' . $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
