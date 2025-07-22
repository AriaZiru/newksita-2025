<?php

namespace Database\Seeders;
use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $players = [
            [
                'name' => 'Thibaut Courtois',
                'position' => 'Goalkeeper',
                'nationality' => 'Belgium',
                'birth_date' => '1992-05-11',
                'jersey_number' => 1,
                'status' => 'injured',
                'team_role' => 'starter',
            ],
            [
                'name' => 'Dani Carvajal',
                'position' => 'Defender',
                'nationality' => 'Spain',
                'birth_date' => '1992-01-11',
                'jersey_number' => 2,
                'status' => 'active',
                'team_role' => 'starter',
            ],
            [
                'name' => 'David Alaba',
                'position' => 'Defender',
                'nationality' => 'Austria',
                'birth_date' => '1992-06-24',
                'jersey_number' => 4,
                'status' => 'injured',
                'team_role' => 'starter',
            ],
            [
                'name' => 'Luka Modrić',
                'position' => 'Midfielder',
                'nationality' => 'Croatia',
                'birth_date' => '1985-09-09',
                'jersey_number' => 10,
                'status' => 'active',
                'team_role' => 'starter',
            ],
            [
                'name' => 'Vinícius Júnior',
                'position' => 'Forward',
                'nationality' => 'Brazil',
                'birth_date' => '2000-07-12',
                'jersey_number' => 7,
                'status' => 'active',
                'team_role' => 'starter',
            ],
            [
                'name' => 'Kepa Arrizabalaga',
                'position' => 'Goalkeeper',
                'nationality' => 'Spain',
                'birth_date' => '1994-10-03',
                'jersey_number' => 25,
                'status' => 'loan',
                'team_role' => 'substitute',
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
