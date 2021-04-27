<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'date' => '2012-10-31',
            'playerid' => 44426,
            'agentid' => 871,
            'currency' => 'EUR',
            'bet' => 0.86,
            'win' => 1.45,
            'rake' => 0.03,
            'tournament' => 0.00,
            'net' => 0.03,
            'fin' => 0.00,
            'aams_ticket' => ',',
            'aams_table' => ',',
        ]);

        Player::create([
            'date' => '2012-10-31',
            'playerid' => 44425,
            'agentid' => 871,
            'currency' => 'EUR',
            'bet' => 1.62,
            'win' => 0.04,
            'rake' => 0.07,
            'tournament' => 0.00,
            'net' => 0.07,
            'fin' => 0.00,
            'aams_ticket' => ',',
            'aams_table' => ',',
        ]);

        Player::create([
            'date' => '2012-10-31',
            'playerid' => 44424,
            'agentid' => 871,
            'currency' => 'EUR',
            'bet' => 4.64,
            'win' => 2.64,
            'rake' => 0.22,
            'tournament' => 0.00,
            'net' => 0.22,
            'fin' => 0.00,
            'aams_ticket' => ',',
            'aams_table' => ',',
        ]);
    }
}
