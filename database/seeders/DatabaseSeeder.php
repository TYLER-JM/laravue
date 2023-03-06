<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->call([
            GameStateSeeder::class,
            OwnerSeeder::class,
            TeamSeeder::class,
            EventSeeder::class,
            OutcomeSeeder::class
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();
    }
}
