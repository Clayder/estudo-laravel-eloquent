<?php

use Illuminate\Database\Seeder;

class SoccerTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\SoccerTeam::class, 100)->create();
    }
}
