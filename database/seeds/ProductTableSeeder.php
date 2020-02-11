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
            'imagePath' => 'https://i.ibb.co/tHdLZ4N/hamburger.jpg',
            'title' => 'Hamburger',
            'description' => 'A sandwich consisting of a patty of hamburger in a split typically round bun',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Burger'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/PxWgtBR/cheeseburger1.jpg',
            'title' => 'Cheeseburger',
            'description' => 'A hamburger topped with a slice of cheese',
            'price' => 8,
            'amount' => 23234,
            'type' => 'Food',
            'subtype' => 'Burger'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/RPX41f9/nuggets2.jpg',
            'title' => 'Chicken Nuggets',
            'description' => 'Deep-fried rounded chicken meat',
            'price' => 6,
            'amount' => 1634,
            'type' => 'Food',
            'subtype' => 'Chicken'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/rZVznPm/sandwich.jpg',
            'title' => 'Sandwich',
            'description' => 'Two or more slices of bread or a split roll having a filling in between',
            'price' => 9,
            'amount' => 334,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/Qvmm6rs/coke.jpg',
            'title' => 'Coca Cola',
            'description' => 'Classic great taste',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/LCwXK7r/hotdog.jpg',
            'title' => 'Hot-Dog',
            'description' => 'A frankfurter, especially one served hot in a long, soft roll and topped with various condiments.',
            'price' => 6.5,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/K6qSfrK/kebab.jpg',
            'title' => 'Kebab',
            'description' => 'Cubes of meat (such as lamb or beef) marinated and cooked with vegetables usually on a skewer',
            'price' => 7.5,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/gwRt9QM/gyro.jpg',
            'title' => 'Gyro',
            'description' => 'A sandwich especially of lamb and beef, tomato, onion, and yogurt sauce on pita bread',
            'price' => 8,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/wy7tFbb/fanta.jpg',
            'title' => 'Fanta',
            'description' => 'Delicious Fruit Flavored Soda',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
        'subtype' => 'Soda'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/2gFjDcy/pepsi.jpg',
            'title' => 'Pepsi',
            'description' => 'Delicious. Refreshing. Pepsi',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/wSHcBnn/schweppes.png',
            'title' => 'Schweppes Indian Tonic',
            'description' => 'The iconic soft drink, based on Jacob Schweppe’s 1783 original formula.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/HpMgY4B/Latte-Macchiato.jpg',
            'title' => 'Latte Macchiato',
            'description' => 'Coffee',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Coffee'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/hRcqg3V/machiato.jpg',
            'title' => 'Espresso Macchiato',
            'description' => 'Espresso coffee drink with a small amount of milk, usually foamed.',
            'price' => 3,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Coffee'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/5h6mXfC/heineken.jpg',
            'title' => 'Heineken',
            'description' => 'Cold, fresh, high quality Heineken. Enjoyed near and far since 1873.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/8D6Bj9K/hoppy.png',
            'title' => 'Ozujsko Hoppy',
            'description' => 'Znalacki odabir!',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/RjpScjy/guinness.jpg',
            'title' => 'Guinness Draught',
            'description' => 'Famous for its smooth velvety texture and unique surge and settle.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/7ywkMV5/guinness-rye-pale-ale.jpg',
            'title' => 'Guinness Rye Pake Ale',
            'description' => 'Rye Pale Ale offers a rustic peppery bite balanced with citrusy grapefruit notes from the Mosaic and Cascade hops',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/ZM0QSRL/zmajskapozoj.jpg',
            'title' => 'Pozoj, Zmajska Pivovara',
            'description' => 'Pozoj! Hmeljna bomba!',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/NjKmwP5/zmajskapils.jpg',
            'title' => 'Pils, Zmajska Pivovara',
            'description' => 'Robusno je, nije šala!',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/748BPmn/zmajska-Pale-Ale.jpg',
            'title' => 'Pale Ale, Zmajska Pivovara',
            'description' => 'Realno, pitko je do bola!',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/GJJ0b7r/zmajskawheat.jpg',
            'title' => 'Hoppy Wheat, Zmajska Pivovara',
            'description' => 'Lagano se pije, a teško zaboravlja!',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/t2xgPsN/gricka-Vjestica.jpg',
            'title' => 'Gricka Vjestica',
            'description' => 'Beer',
            'price' => 4.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/TMjvY5R/lovac.jpg',
            'title' => 'Lovac (Porter Pale, Ale)',
            'description' => 'Beer',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/s3T5B2D/southern-Comfort.jpg',
            'title' => 'Southern Comfort Black',
            'description' => 'A robust whiskey-forward profile with subtle spice and fruity accents, our Black label takes the original Southern Comfort experience up a notch',
            'price' => 6,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Whiskey'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/DfS0j60/south-Comfort-Og.jpg',
            'title' => 'Southern Comfort Original',
            'description' => 'Southern Comfort Original is inspired by our founder’s 1874 recipe, with core whiskey notes and iconic fruit and spice accents.',
            'price' => 5.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Whiskey'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/y8tvQQB/aviation.jpg',
            'title' => 'Aviation Gin',
            'description' => 'Crafted with a blend of botanicals. Elevated, yet smoother, more subtle, and balanced.',
            'price' => 5.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Gin'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/9rkHRCF/pizza.jpg',
            'title' => 'Pizza',
            'description' => 'A dish made typically of flattened bread dough spread with a savory mixture usually including tomatoes and cheese and often other toppings and baked',
            'price' => 9,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Pizza'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/bWwBL9f/sausages.jpg',
            'title' => 'Sausages, Griled',
            'description' => 'Grilled Sausages',
            'price' => 7.5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/2WRhxqF/steak.jpg',
            'title' => 'Steak, Grilled',
            'description' => 'Grilled Steak',
            'price' => 11,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/JpP37ZT/cevapi.jpg',
            'title' => 'Cevapi',
            'description' => 'A grilled dish of minced meat',
            'price' => 7,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/6BGRPF9/Grilled-Chicken.jpg',
            'title' => 'Grilled Chicken',
            'description' => 'Grilled Chicken',
            'price' => 8,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/cyYGsLy/grilled-Fish.jpg',
            'title' => 'Grilled Fish',
            'description' => 'Grilled Fish',
            'price' => 9,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/6rbRF3q/burrito.jpg',
            'title' => 'Burrito',
            'description' => 'A flour tortilla rolled or folded around a filling (as of meat, beans, and cheese)',
            'price' => 7.5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Mexican'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/WkKQmhH/taco.jpg',
            'title' => 'Taco',
            'description' => 'A tortilla that is folded or rolled and stuffed with a mixture (as of seasoned meat, cheese, and lettuce)',
            'price' => 7,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Mexican'
        ]);
        $product->save();
    }
}
