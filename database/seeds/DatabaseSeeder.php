<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypesDatabaseSeeder::class);
        $this->call(InterviewTypesDatabaseSeeder::class);
        $this->call(OfficeDatabaseSeeder::class);
        $this->call(WorkingHourDatabaseSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(InterviewDatabaseSeeder::class);
    }
}
