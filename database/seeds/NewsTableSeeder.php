<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Новость 1',
            'alias' => 'novost-1',
            'introtext' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'text' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'user_id' => 1
        ]);
        DB::table('news')->insert([
            'title' => 'Новость 2',
            'alias' => 'novost-2',
            'introtext' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'text' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'user_id' => 1
        ]);
        DB::table('news')->insert([
            'title' => 'Новость 3',
            'alias' => 'novost-3',
            'introtext' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'text' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'user_id' => 1
        ]);
        DB::table('news')->insert([
            'title' => 'Новость 4',
            'alias' => 'novost-4',
            'introtext' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'text' => 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая образ единственное повстречался журчит семь переулка. Свое ведущими, заголовок! Семантика то решила текстами но напоивший, составитель подзаголовок рекламных выйти!',
            'user_id' => 1
        ]);
    }
}
