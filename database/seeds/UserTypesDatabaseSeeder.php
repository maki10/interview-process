<?php

use App\UserType;
use Illuminate\Database\Seeder;

class UserTypesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create(['role' => 'administrator']);
        UserType::create(['role' => 'student']);
        UserType::create(['role' => 'staff']);
    }
}
