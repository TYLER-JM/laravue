<?php

namespace Database\Seeders;

use App\Models\Outcome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outcomes = [
            [
                'event_id' => 1,
                'home_team_score' => 4,
                'away_team_score' => 2,
            ],
            [
                'event_id' => 2,
                'home_team_score' => 3,
                'away_team_score' => 4,
                'overtime' => true
            ],
            [
                'event_id' => 3,
                'home_team_score' => 5,
                'away_team_score' => 1,
            ],
            [
                'event_id' => 4,
                'home_team_score' => 1,
                'away_team_score' => 0,
                'overtime' => true
            ],
        ];
        DB::table('outcomes')->truncate();
        foreach ($outcomes as  $outcome) {
            Outcome::create($outcome);
        }
    }
}
