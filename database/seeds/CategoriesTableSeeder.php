<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Рубашки',
            'alias' => 'Rubashki',
            'description' => 'Как правило, состоит из воротника, полочек, спинки, кокетки, рукавов, ластовицы (треугольный кусок ткани, вшитый у основания рукава, между полочкой и спинкой). Различают рубашки с коротким (до локтя) и длинным (до запястья) рукавом.'
        ]);
        DB::table('categories')->insert([
            'title' => 'Куртки',
            'alias' => 'Kurtki',
            'description' => 'Вид одежды, предназначенной для защиты от ветра, холода и дождя'
        ]);
        DB::table('categories')->insert([
            'title' => 'Футболки',
            'alias' => 'Futbolki',
            'description' => 'Футболки - это одежда, которая подходит каждому. К больщому разнообразию цветов и дизайнов добавляются различные актуальные принты и мотивы. Наши футболки подчеркнут Вашу индивидуальность'
        ]);
    }
}
