<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        $nextWeek = Carbon::today()->addWeek();
        $events = [
            [
                'game_pk' => 1,
                'home_team_id' => 1,
                'away_team_id' => 3,
                'date' => $today,
                'game_state_id' => 3
            ],
            [
                'game_pk' => 2,
                'home_team_id' => 2,
                'away_team_id' => 3,
                'date' => $today,
                'game_state_id' => 3
            ],
            [
                'game_pk' => 3,
                'home_team_id' => 3,
                'away_team_id' => 4,
                'date' => $today,
                'game_state_id' => 3
            ],
            [
                'game_pk' => 4,
                'home_team_id' => 4,
                'away_team_id' => 1,
                'date' => $today,
                'game_state_id' => 3
            ],
            [
                'game_pk' => 5,
                'home_team_id' => 1,
                'away_team_id' => 4,
                'date' => $nextWeek,
                'game_state_id' => 1
            ],
        ];

        DB::table('events')->truncate();
        foreach ($events as  $event) {
            Event::create($event);
        }
    }
}
