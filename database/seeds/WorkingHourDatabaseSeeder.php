<?php

use App\Office;
use App\WorkingHour;
use Illuminate\Database\Seeder;

class WorkingHourDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $office = Office::first();

        $office->workingHours()->create(['day' => 'monday', 'from' => "09:00", 'to' => "15:00"]);
        $office->workingHours()->create(['day' => 'tuesday', 'from' => "09:00", 'to' => "15:00"]);
        $office->workingHours()->create(['day' => 'wednesday', 'from' => "09:00", 'to' => "15:00"]);
        $office->workingHours()->create(['day' => 'thursday', 'from' => "09:00", 'to' => "15:00"]);
        $office->workingHours()->create(['day' => 'friday', 'from' => "09:00", 'to' => "15:00"]);
    }
}
