<?php

use Illuminate\Database\Seeder;

class ClientProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retorno os clientes
        $clients = \App\Models\Clients::all();
        $countClients = $clients->count();

        $collectionIndividual = factory(\App\Models\ClientProfile::class, $countClients)->make();

        $collectionIndividual->each(function ($clientProfile) use ($clients) {
            // Atribuo um id aleatório
            $clientProfile->clients_id = $clients->random()->id;
            $clientProfile->save();
        });
    }
}
