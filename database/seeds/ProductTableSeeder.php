<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://static.klix.ba/media/images/vijesti/b_191223138.jpg?v=2',
            'title' => 'Hamburger',
            'description' => 'Hamburger - dobar',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.vrisak.info/wp-content/uploads/2018/12/Savr%C5%A1eni-hamburger-ima-devet-slojeva-i-visok-je-sedam-centimetara.jpg',
            'title' => 'Cheeseburger',
            'description' => 'Cheeseburger - dobar',
            'price' => 8,
            'amount' => 23234,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/9D900DB3-435D-4AE4-9375-B152D2813750/Derivates/199C60FC-C264-43A3-B822-88AA5E50E954.jpg',
            'title' => 'Nuggets',
            'description' => 'Chicken Nuggets - dobri',
            'price' => 6,
            'amount' => 1634,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://prods3.imgix.net/images/articles/2017_04/Feature-restaurant-butcher-bakery-shops2.jpg?auto=format%2Ccompress&ixjsv=2.2.3',
            'title' => 'Sandwich',
            'description' => 'Sandwich - dobar skroz',
            'price' => 9,
            'amount' => 334,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.balawholesalers.com/wp-content/uploads/2019/09/diet-coca-cola-330ml-glass.jpg',
            'title' => 'Coca Cola',
            'description' => 'Refreshing beverage',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://assets.myfoodandfamily.com/adaptivemedia/rendition/52394_3000x2000.jpg?id=ac869ad839a5f0119fdebf2d17dbbb75baab7f22&ht=650&wd=1004&clid=pim',
            'title' => 'Hot-Dog',
            'description' => 'Hot-Dog - dobar',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://just-eat-prod-sg-res.cloudinary.com/image/upload/c_fill,d_au:cuisines:middle-eastern-1.jpg,f_auto,q_auto,w_500/v1/au/restaurants/1004781.jpg',
            'title' => 'Kebab',
            'description' => 'Kebab - dobar',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.kitchensanctuary.com/wp-content/uploads/2017/11/Pork-Gyros-with-Homemade-Tzatziki-square-FS-500x500.jpg',
            'title' => 'Gyro',
            'description' => 'Gyro - dobar',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food'
        ]);
        $product->save();
    }
}
