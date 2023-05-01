<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'api_id' => 1,
                'owner_id' => 1,
                'location' => 'New Jersey',
                'name' => 'Devils',
                'abbreviation' => 'NJD',
            ],
            [
                'api_id' => 2,
                'owner_id' => 1,
                'location' => 'New York',
                'name' => 'Rangers',
                'abbreviation' => 'NYR',
            ],
            [
                'api_id' => 3,
                'owner_id' => 2,
                'location' => 'Montreal',
                'name' => 'Canadiens',
                'abbreviation' => 'MTL',
            ],
            [
                'api_id' => 4,
                'owner_id' => 2,
                'location' => 'Carolina',
                'name' => 'Hurricanes',
                'abbreviation' => 'CAR',
            ],
        ];

        DB::table('teams')->truncate();
        foreach ($teams as  $team) {
            Team::create($team);
        };
    }
}
