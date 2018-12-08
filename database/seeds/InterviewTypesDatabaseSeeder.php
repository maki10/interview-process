<?php

use App\InterviewType;
use Illuminate\Database\Seeder;

class InterviewTypesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InterviewType::create(['type' => 'freshman']);
        InterviewType::create(['type' => 'transfer']);
    }
}
