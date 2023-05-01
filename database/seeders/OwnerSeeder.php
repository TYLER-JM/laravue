<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = ['Pop', 'Mom', 'Cayla', 'Dustin', 'TJ', 'Chris', 'Adrielle'];

        DB::table('owners')->truncate();
        foreach ($owners as  $owner) {
            Owner::create([
                'name' => $owner
            ]);
        }
    }
}
