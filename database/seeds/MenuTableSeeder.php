<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title' => 'Главная',
            'path' => '/',
            'introtext' => 'Главная страница сайта с товарами'
        ]);
        DB::table('menus')->insert([
            'title' => 'Новости',
            'path' => '/news',
            'introtext' => 'Страница с новостями'
        ]);
    }
}
