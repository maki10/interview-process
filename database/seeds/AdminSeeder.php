<?php

use App\User;
use App\UserType;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role = UserType::whereRole('administrator')->first();

        User::create([
        	'fname' => 'Administrator',
	        'email' => 'admissions@cloudhorizon.com',
	        'password' => bcrypt('admissions'),
	        'user_type_id' => $role->id,
        ]);
    }
}
