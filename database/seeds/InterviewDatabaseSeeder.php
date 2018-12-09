<?php

use App\Interview;
use App\InterviewType;
use App\Office;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InterviewDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = User::first();
    	$office = Office::first();
    	$interviewType = InterviewType::first();

        Interview::create([
			'name' => "Nemanja Maric",
			'interview_type_id' => $interviewType->id,
			'office_id' => $office->id,
			'user_id' => $user->id,
			'length' => 60,
			'from' => Carbon::now()->toDateTimeString(),
			'to' => Carbon::now()->addHour()->toDateTimeString(),
			'status' => 'confirmed',
        ]);
    }
}
