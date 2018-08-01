<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Рубашка Henderson',
            'alias' => 'Rubashka Henderson',
            'thumb' => 'default.png',
            'description' => 'Узор: однотонный, Силуэт: приталенный, Стиль: классический, Состав: хлопок',
            'price' => '1995',
            'old_price' => '2095',
            'quantity' => 7,
            'images' => 'noimage.png',
            'category_id' => 4,
            'brand_id' => 4
        ]);

        DB::table('products')->insert([
            'title' => 'Рубашка Oodji',
            'alias' => 'Rubashka Oodji',
            'thumb' => 'default.png',
            'description' => 'Рукав: длинный, Узор: однотонный, Состав: хлопок',
            'price' => '799',
            'old_price' => '899',
            'quantity' => 200,
            'images' => 'noimage.png',
            'category_id' => 4,
            'brand_id' => 6
        ]);

        DB::table('products')->insert([
            'title' => 'Рубашка ARMANI',
            'alias' => 'Rubashka ARMANI',
            'thumb' => 'default.png',
            'description' => 'Состав: хлопок',
            'price' => '8800',
            'old_price' => '8900',
            'quantity' => 1,
            'images' => 'noimage.png',
            'category_id' => 4,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Рубашка Hugo Boss',
            'alias' => 'Rubashka Hugo Boss',
            'thumb' => 'default.png',
            'description' => 'Рукав: короткий, Узор: однотонный, Сезон: весна, лето, Силуэт: прямой',
            'price' => '6790',
            'old_price' => '6890',
            'quantity' => 5,
            'images' => 'noimage.png',
            'category_id' => 4,
            'brand_id' => 5
        ]);

        DB::table('products')->insert([
            'title' => 'Куртка Atlas for Men',
            'alias' => 'Kurtka Atlas for Men',
            'thumb' => 'default.png',
            'description' => 'Сезон: весна, лето, осень, Материал верха: текстиль, Состав: полиэстер, хлопок',
            'price' => '2499',
            'old_price' => '2500',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 5,
            'brand_id' => 3
        ]);

        DB::table('products')->insert([
            'title' => 'Куртка ARMANI',
            'alias' => 'Kurtka ARMANI',
            'thumb' => 'default.png',
            'description' => 'Размер: 50 (RU)',
            'price' => '23600',
            'old_price' => '24000',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 5,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Куртка Oodji',
            'alias' => 'Kurtka Oodji',
            'thumb' => 'default.png',
            'description' => 'Модель: пилот, Сезон: весна, осень, Материал верха: искусственная кожа, Состав: полиэстер',
            'price' => '3499',
            'old_price' => '3599',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 5,
            'brand_id' => 6
        ]);

        DB::table('products')->insert([
            'title' => 'Куртка  HUGO BOSS',
            'alias' => 'Kurtka  HUGO BOSS',
            'thumb' => 'default.png',
            'description' => 'Сезон: весна, лето, осень, Материал верха: текстиль, Состав: полиэстер, хлопок',
            'price' => '28000',
            'old_price' => '28199',
            'quantity' => 12,
            'images' => 'noimage.png',
            'category_id' => 5,
            'brand_id' => 5
        ]);

        DB::table('products')->insert([
            'title' => 'Куртка PUMA',
            'alias' => 'Kurtka PUMA',
            'thumb' => 'default.png',
            'description' => 'Сезон: весна, осень, Капюшон: да, Состав: полиамид, полиэстер',
            'price' => '9580',
            'old_price' => '10000',
            'quantity' => 3,
            'images' => 'noimage.png',
            'category_id' => 5,
            'brand_id' => 7
        ]);

        DB::table('products')->insert([
            'title' => 'Футболка PUMA',
            'alias' => 'Futbolka PUMA',
            'thumb' => 'default.png',
            'description' => 'Состав: полиэстер',
            'price' => '690',
            'old_price' => '1490',
            'quantity' => 7,
            'images' => 'noimage.png',
            'category_id' => 6,
            'brand_id' => 7
        ]);

        DB::table('products')->insert([
            'title' => 'Футболка Henderson',
            'alias' => 'Futbolka Henderson',
            'thumb' => 'default.png',
            'description' => 'Футболка HENDERSON Sport с С-образной горловиной и коротким рукавом. Изделие обеспечивает удобство и свободу движений во время любых тренировок благодаря эластичной ткани с инновационной бесшовной технологией вязки Seamless Comfort. Такой материал создает ощущение второй кожи. Технология Quick Dry быстро отводит и испаряет влагу с поверхности кожи. Изделие имеет максимальную воздухопроницаемость благодаря специальным переплетениям в тканях Air Pro, что позволяет коже дышать при высоких нагрузках. Внутренний шов горловины обработан тесьмой с логотипом HENDERSON Sport для максимального удобства и защиты от трения во время движения. Светоотражающие принты Reflective Details - логотип HENDERSON Sport и пунктирная линия по бокам - позволяют быть заметным в условиях низкой освещенности. Такая футболка будет исключительно удобной для фитнеса и тренировок в спортивном зале.',
            'price' => '595',
            'old_price' => '1999',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 6,
            'brand_id' => 4
        ]);

        DB::table('products')->insert([
            'title' => 'Футболка adidas',
            'alias' => 'Futbolka adidas',
            'thumb' => 'default.png',
            'description' => 'Размер: 54 (RU)',
            'price' => '1690',
            'old_price' => '1690',
            'quantity' => 1,
            'images' => 'noimage.png',
            'category_id' => 6,
            'brand_id' => 1
        ]);
    }
}
