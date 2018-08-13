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
            'path' => '/dashboard/news',
            'introtext' => 'Страница с новостями'
        ]);
        DB::table('menus')->insert([
            'title' => 'Товары',
            'path' => '/dashboard/products',
            'introtext' => 'Редактирование товаров'
        ]);
        DB::table('menus')->insert([
            'title' => 'Категории',
            'path' => '/dashboard/category',
            'introtext' => 'Редактирование категорий'
        ]);
        DB::table('menus')->insert([
            'title' => 'Бренды',
            'path' => '/dashboard/brands',
            'introtext' => 'Редактирование брендов'
        ]);
    }
}
