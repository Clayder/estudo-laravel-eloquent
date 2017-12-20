<?php

use Illuminate\Database\Seeder;
use \Illuminate\Database\Eloquent\Collection;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retorno os times
        $soccers = \App\Models\SoccerTeam::all();

        /**
         * Recebo uma coleção ( 10 ) de clientes do tipo físico
         */
        $collectionIndividual = factory(\App\Models\Clients::class, 10)
            ->states(\App\Models\Clients::TYPE_INDIVIDUAL)->make();

        /**
         * É realizado uma estrutura de repetição, onde cada cliente
         * é associado a um time aleatório.
         */
        $collectionIndividual->each(function ($client) use ($soccers) {
            // Atribuo um id aleatório
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });

        $collectionLegal = factory(\App\Models\Clients::class, 10)
            ->states(\App\Models\Clients::TYPE_LEGAL)->make();
        $collectionLegal->each(function ($client) use ($soccers) {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });
    }
}
