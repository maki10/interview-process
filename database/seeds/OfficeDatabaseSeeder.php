<?php

use App\Office;
use Illuminate\Database\Seeder;

class OfficeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create(['name' => 'Office1']);
    }
}
