<?php

use Illuminate\Database\Seeder;

class CarouselsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::insert('INSERT INTO `carousels` (`images`,`text`) VALUES (?,?)',
    							[
    								'slaid1.jpg',
    								'<h2>ОФОРМЛЕННЯ</h2>
									<p>БЕЗ ПІДБОРУ ВАКАНСІЙ</p>
									<h3>3000 грн</h3>'
    							]);
    	DB::insert('INSERT INTO `carousels` (`images`,`text`) VALUES (?,?)',
    							[
    								'slaid2.jpg',
    								'<h2>ПРАЦЕВЛАШТУВАННЯ<br/>
									ПО БІОМЕТРИЧНОМУ ПАСПОРТУ</h2>
									<h3>2000 грн</h3>'
    							]);
    	DB::insert('INSERT INTO `carousels` (`images`,`text`) VALUES (?,?)',
    							[
    								'slaid3.jpg',
    								'<h2>Оформлення повного<br/>
									ПАКЕТУ ДОКУМЕНТІВ:</h2>
									<h3>3000 грн</h3>'
    							]);

    }
}
