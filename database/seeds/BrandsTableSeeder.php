<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'Adidas',
            'alias' => 'Adidas',
            'introtext' => 'Немецкий промышленный концерн, специализирующийся на выпуске спортивной обуви, одежды и инвентаря.'
        ]);

        DB::table('brands')->insert([
            'title' => 'Armani',
            'alias' => 'Armani',
            'introtext' => 'Итальянская компания, специализирующаяся на производстве одежды и различных аксессуаров.'
        ]);

        DB::table('brands')->insert([
            'title' => 'Atlas for Men',
            'alias' => 'Atlas for Men',
            'introtext' => 'Каталог одежды Atlas For Men, созданный в 1999 году, предлагает мужчинам, любящим отдых на свежем воздухе, коллекцию одежды и аксессуаров для прогулок и занятий спортом по выгодным ценам'
        ]);

        DB::table('brands')->insert([
            'title' => 'Henderson',
            'alias' => 'Henderson',
            'introtext' => 'Дом моды HENDERSON более 20 лет предлагает мужчинам элегантную и стильную одежду для работы и отдыха. Сегодня HENDERSON присутствует в 160 крупнейших торговых центрах, расположенных более чем в 55 городах России.'
        ]);

        DB::table('brands')->insert([
            'title' => 'Hugo Boss',
            'alias' => 'Hugo Boss',
            'introtext' => 'немецкая компания-производитель модной одежды. Штаб-квартира — в городе Метцинген (земля Баден-Вюртемберг, Германия).'
        ]);

        DB::table('brands')->insert([
            'title' => 'Oodji',
            'alias' => 'Oodji',
            'introtext' => 'Российская компания, управляющая сетью магазинов молодёжной одежды. Основана в 1998 году в Санкт-Петербурге.'
        ]);

        DB::table('brands')->insert([
            'title' => 'Puma',
            'alias' => 'Puma',
            'introtext' => 'промышленная компания Германии, специализирующаяся на выпуске спортивной обуви, одежды, инвентаря и парфюмерии'
        ]);
    }
}
