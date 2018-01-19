<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([
        					'name' => 'Головна сторінка',
        					'alias' => 'carouselExampleIndicators'
        				]);

        DB::table('pages')->insert([
        					'name' => 'Вакансії',
							'alias' => 'vacantions',
        					'images' => 'documents.jpg'
        				]);

        DB::table('pages')->insert([
        					'name' => 'Документи',
							'alias' => 'documents',
							'text' => '<p>Перелік необхідних документів. В окремих випадках інші документи.</p>'
        				]);

        DB::table('pages')->insert([
        					'name' => 'Контакти',
							'alias' => 'contact',
							'text' => '<h5>м. Вінниця<br/>вул.Заози Петросяновича 12 "Дім Гаврард" оф.23</h5><hr/>'
        				]);

        DB::table('pages')->insert([
        					'name' => 'Відгуки',
							'alias' => 'reviews'
        				]);
    }
}
