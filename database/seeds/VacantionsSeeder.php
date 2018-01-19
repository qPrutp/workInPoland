<?php

use Illuminate\Database\Seeder;


class VacantionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vacantions')->insert([
        				'name_vacancy' => 'Пакування свічок, сортування на брак/не брак',
        				'place_work' => 'Варшава',
        				'experience' => 'не потрбіно',
        				'rate_per_hour' => '11',
        				'accommodation' => 'роботодавець забезпечує',
        				'language' => 'не потрібно',
        				'age' => '18-50',
        				'images' => 'svi4ky.jpg'
        			]);

       	DB::table('vacantions')->insert([
        				'name_vacancy' => 'LG ELECTRONIX',
        				'place_work' => 'Варшава',
        				'experience' => 'не потрбіно',
        				'rate_per_hour' => '11',
        				'accommodation' => 'роботодавець забезпечує',
        				'language' => 'не потрібно',
        				'age' => '18-50',
        				'images' => 'lg.jpg'
        			]);

        DB::table('vacantions')->insert([
        				'name_vacancy' => 'Автомобільний завод CENTRUM-BMW',
        				'place_work' => 'Варшава',
        				'experience' => 'не потрбіно',
        				'rate_per_hour' => '11',
        				'accommodation' => 'роботодавець забезпечує',
        				'language' => 'не потрібно',
        				'age' => '18-50',
        				'images' => 'bmw.jpg'
    				]);
    }
}
