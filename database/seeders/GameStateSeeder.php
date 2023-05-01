<?php

namespace Database\Seeders;

use App\Models\GameState;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameStates = ['upcoming', 'in progress', 'completed', 'rescheduled', 'delayed'];
        DB::table('game_states')->truncate();
        foreach ($gameStates as  $state) {
            GameState::create([
                'name' => $state
            ]);
        }
    }
}
