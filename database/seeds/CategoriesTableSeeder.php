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
            'title' => 'ABIBAS',
            'alias' => 'abibas',
            'description' => 'Немецкий промышленный концерн, специализирующийся на выпуске спортивной обуви, одежды и инвентаря.'
        ]);
        DB::table('categories')->insert([
            'title' => 'NIKE',
            'alias' => 'nike',
            'description' => 'В американская компания, всемирно известный производитель спортивной одежды и обуви. Штаб-квартира — в городе Бивертон (штат Орегон). По мнению аналитиков, на долю компании Nike приходится почти 95 % рынка баскетбольной обуви в США'
        ]);
        DB::table('categories')->insert([
            'title' => 'PUMA',
            'alias' => 'puma',
            'description' => 'Промышленная компания Германии, специализирующаяся на выпуске спортивной обуви, одежды, инвентаря и парфюмерии под торговой маркой Puma.'
        ]);
    }
}
