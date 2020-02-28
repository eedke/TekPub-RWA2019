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
            'imagePath' => 'https://i.ibb.co/b5YZzbG/oie-Gw-MVXp-FSQEEm.jpg',
            'title' => 'Hamburger',
            'description' => 'A sandwich consisting of a patty of hamburger in a split typically round bun',
            'price' => 7,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/PxWgtBR/cheeseburger1.jpg',
            'title' => 'Cheeseburger',
            'description' => 'A hamburger topped with a slice of cheese',
            'price' => 8,
            'amount' => 23234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/nDGbxXy/oie-NFi7-Uto1wk-CZ.jpg',
            'title' => 'Chicken Nuggets',
            'description' => 'Deep-fried rounded chicken meat',
            'price' => 6,
            'amount' => 1634,
            'type' => 'Food',
            'subtype' => 'Chicken'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/Fn42zhL/oie-r7-Z9-OIC3d51-K.jpg',
            'title' => 'Sandwich',
            'description' => 'Two or more slices of bread or a split roll having a filling in between',
            'price' => 9,
            'amount' => 334,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/7Ynkjd8/oie-lg-QA4l-VQo-TPm.jpg',
            'title' => 'Coca Cola',
            'description' => 'Classic great taste',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/gFCNG0r/oie-QUcrirw9b3-Bm.jpg',
            'title' => 'Hot-Dog',
            'description' => 'A frankfurter, especially one served hot in a long, soft roll and topped with various condiments.',
            'price' => 6.5,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/tPdmjDx/oie-e-DOckth-RZYfb.jpg',
            'title' => 'Kebab',
            'description' => 'Cubes of meat (such as lamb or beef) marinated and cooked with vegetables usually on a skewer',
            'price' => 7.5,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/mcDd1cq/oie-Th07-Qdfb8aa7.jpg',
            'title' => 'Gyro',
            'description' => 'A sandwich especially of lamb and beef, tomato, onion, and yogurt sauce on pita bread',
            'price' => 8,
            'amount' => 1234,
            'type' => 'Food',
            'subtype' => 'Sandwich'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/zZwqz2x/oie-aek-A1k-FAEl3-Z.jpg',
            'title' => 'Fanta',
            'description' => 'Delicious Fruit Flavored Soda',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
        'subtype' => 'Soda'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/ZgtzxPf/oie-jvc-XTOo-XQ3th.jpg',
            'title' => 'Pepsi',
            'description' => 'Delicious. Refreshing. Pepsi',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/6PPRLyx/oie-PCLPl-Io4psw0.png',
            'title' => 'Schweppes Indian Tonic',
            'description' => 'The iconic soft drink, based on Jacob Schweppe’s 1783 original formula.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Soda'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/Yd5tdf9/oie-ng-Qsf-Emi-Or-Px.jpg',
            'title' => 'Latte Macchiato',
            'description' => 'Coffee beverage; the name means stained or marked milk',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Coffee'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/GQYB6sv/oie-j-OBCUq2v1l-F1.jpg',
            'title' => 'Espresso Macchiato',
            'description' => 'Espresso coffee drink with a small amount of milk, usually foamed.',
            'price' => 3,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Coffee'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/dg9MY1J/oie-l3-LKPMq-Nnq-F8.jpg',
            'title' => 'Heineken',
            'description' => 'Cold, fresh, high quality Heineken. Enjoyed near and far since 1873.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/mJvG92M/oie-k3-Y0-R0i-DSy-Xm.png',
            'title' => 'Ozujsko Hoppy',
            'description' => 'Znalacki odabir!',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/Sv1Rx8X/oie-uf-DRUUi-ZKb-Cn.jpg',
            'title' => 'Guinness Draught',
            'description' => 'Famous for its smooth velvety texture and unique surge and settle.',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/ScV7fBs/oie-LNBG38-Ms-QMp-D.jpg',
            'title' => 'Guinness Rye Pake Ale',
            'description' => 'Rye Pale Ale offers a rustic peppery bite balanced with citrusy grapefruit notes from the Mosaic and Cascade hops',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/gZj4NLW/Image-URL.jpg',
            'title' => 'Zmajska Pivovara',
            'description' => 'Pale Ale, Pils, Hoppy Wheat, Pozoj',
            'price' => 3.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/1s2564g/oie-iv8-Edded-PY6l.jpg',
            'title' => 'Pivovara Medvedgrad',
            'description' => 'Gricka Vjestica, Zlatni Medvjed, Dva Klasa, Crna Kraljica',
            'price' => 5.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/3m7CKZg/oie-ICnv-Dsly-Mfah.jpg',
            'title' => 'Lovac (Porter Pale, Ale)',
            'description' => 'Beer',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Beer'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/c6Xjt60/oie-Bho-LF9-ZXx2-FO.jpg',
            'title' => 'Southern Comfort Black',
            'description' => 'A robust whiskey-forward profile with subtle spice and fruity accents.',
            'price' => 6,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Whiskey'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/P4Q0K1q/oie-BAWg-FPGb-Yn51.jpg',
            'title' => 'Southern Comfort Og',
            'description' => 'Southern Comfort Original is inspired by the founder’s 1874 recipe, with iconic fruit and spice accents.',
            'price' => 5.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Whiskey'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/R3fT8pP/oie-Qr6-Nm-YZKP621.jpg',
            'title' => 'Aviation Gin',
            'description' => 'Crafted with a blend of botanicals. Elevated, yet smoother, more subtle, and balanced.',
            'price' => 5.5,
            'amount' => 9999,
            'type' => 'Drinks',
            'subtype' => 'Gin'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/SJkF9qf/oie-8-BUje-X3h-Bv0-O.jpg',
            'title' => 'Pizza',
            'description' => 'A dish made typically of flattened bread dough spread with a savory mixture usually including tomatoes and cheese.',
            'price' => 9,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Italian'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/Z8znqpT/oie-nory086-C209-T.jpg',
            'title' => 'Sausages, Griled',
            'description' => 'Grilled Sausages',
            'price' => 7.5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/rmZHC6b/oie-ab-UGQubc-Fx-CS.jpg',
            'title' => 'Steak, Grilled',
            'description' => 'Grilled Steak',
            'price' => 11,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/NmdWMdP/oie-uz-SPu-MDh-G1-K7.jpg',
            'title' => 'Cevapi',
            'description' => 'A grilled dish of minced meat',
            'price' => 7,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/7Yjzptj/oie-YXSOs3-I7b-R3n.jpg',
            'title' => 'Grilled Chicken',
            'description' => 'Grilled Chicken',
            'price' => 8,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/YL5Yjmy/oie-epw-Qbu-Gqtg3-I.jpg',
            'title' => 'Grilled Fish',
            'description' => 'Grilled Fish',
            'price' => 9,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/7vYx0Sj/oie-r-PZRQQFw-ASDJ.jpg',
            'title' => 'Burrito',
            'description' => 'A flour tortilla rolled or folded around a filling (as of meat, beans, and cheese)',
            'price' => 7.5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Mexican'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/FgX5tD1/oie-Yw-WFjstyt-Fr-C.jpg',
            'title' => 'Taco',
            'description' => 'A tortilla that is folded or rolled and stuffed with a mixture (as of seasoned meat, cheese, and lettuce)',
            'price' => 7,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Mexican'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/d71TNmC/oie-ZTl1oma-Axryc.jpg',
            'title' => 'French Fries',
            'description' => 'Batonnet or allumette-cut deep-fried potatoes.',
            'price' => 5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Side'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/M9z3tvz/oie-9ox0x-OItj78x.jpg',
            'title' => 'Garlic Bread',
            'description' => 'Garlic bread consists of bread, topped with garlic and olive oil or butter and may include additional herbs.',
            'price' => 4,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Side'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/sQXCZXn/oie-ssvsmp-Tb3r3x.jpg',
            'title' => 'Chilli Con Carne',
            'description' => 'A spicy stew containing chili peppers, meat, and often tomatoes and beans.',
            'price' => 5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Mexican'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/72TdMFz/oie-wf-UD0oy-OMb-KP.jpg',
            'title' => 'Spaghetti Bolognese',
            'description' => 'Spaghetti served with a sauce made from tomatoes, minced beef, garlic, wine and herbs',
            'price' => 5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Italian'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/JHWwBwY/oie-AWTMVsv-MSA3-Z.jpg',
            'title' => 'Griled Veggies',
            'description' => 'Grilled Vegetables',
            'price' => 5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Grill'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i.ibb.co/wgvbbW2/oie-o5-Eq-Zz99-Bh-Xz.jpg',
            'title' => 'Omelette',
            'description' => 'A dish made from beaten eggs fried with butter or oil in a frying pan.',
            'price' => 5,
            'amount' => 9999,
            'type' => 'Food',
            'subtype' => 'Eggs'
        ]);
        $product->save();
    }
}
