<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CarouselsSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(VacantionsSeeder::class);
    }
}
