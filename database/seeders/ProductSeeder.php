<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => '1',
            'name_product' => 'Scallop Ceviche with Mango Foam',
            'description' => 'Fresh scallops marinated in lime juice with a soft mango foam and hints of coriander.',
            'id_category' => '1',
            'price' => '18.99',
            'picture' => 'ceviche.jpg',
        ]);

        Product::create([
            'id' => '2',
            'name_product' => 'Tuna Tartar with Passion Fruit Sauce',
            'description' => 'Delicious fresh tuna tartar served with a passion fruit sauce and crunchy sesame toast.',
            'id_category' => '1',
            'price' => '22.50',
            'picture' => 'tartar.jpg',
        ]);

        Product::create([
            'id' => '3',
            'name_product' => 'Wild Mushroom Risotto',
            'description' => 'Creamy rice cooked with a mixture of wild mushrooms, mushroom broth and grated Parmesan.',
            'id_category' => '2',
            'price' => '20.99',
            'picture' => 'risotto-de-setas.jpg',
        ]);

        Product::create([
            'id' => '4',
            'name_product' => 'Glazed Salmon with Miso Sauce',
            'description' => 'Salmon fillet glazed with a delicious miso sauce and served with steamed vegetables.',
            'id_category' => '1',
            'price' => '24.75',
            'picture' => 'salmonGlaseado.jpg',
        ]);

        Product::create([
            'id' => '5',
            'name_product' => 'Roast Suckling Pig with Apple Puree',
            'description' => 'Crispy slow-roasted suckling pig served with a smooth apple puree and rosemary sauce.',
            'id_category' => '3',
            'price' => '32.99',
            'picture' => 'cochinillo.jpg',
        ]);

        Product::create([
            'id' => '6',
            'name_product' => 'Beetroot and Goat Cheese Tartar',
            'description' => 'Refreshing beetroot, goat´s cheese and walnut tartar, dressed with balsamic vinaigrette.',
            'id_category' => '4',
            'price' => '16.50',
            'picture' => 'tartarremolacha.jpg',
        ]);

        Product::create([
            'id' => '7',
            'name_product' => 'Fresh Pasta with Black Truffle',
            'description' => 'Homemade pasta cooked al dente with a generous amount of black truffle and parmesan cheese.',
            'id_category' => '2',
            'price' => '28.99',
            'picture' => 'espaguetisTrufa.jpg',
        ]);

        Product::create([
            'id' => '8',
            'name_product' => 'Grilled Lobster with Garlic Sauce',
            'description' => 'Fresh grilled lobster with garlic and herb butter, accompanied by grilled asparagus.',
            'id_category' => '1',
            'price' => '42.75',
            'picture' => 'langosta.webp',
        ]);

        Product::create([
            'id' => '9',
            'name_product' => 'Octopus Taco with Guacamole',
            'description' => 'Grilled octopus taco with homemade guacamole, pico de gallo and fresh coriander.',
            'id_category' => '4',
            'price' => '14.25',
            'picture' => 'tacoPulpo.jpg',
        ]);

        Product::create([
            'id' => '10',
            'name_product' => 'Beef Sirloin with Red Wine Reduction',
            'description' => 'Juicy beef tenderloin cooked to perfection, accompanied by a rich red wine reduction.',
            'id_category' => '3',
            'price' => '36.50',
            'picture' => 'solomillo.jpg',
        ]);

        Product::create([
            'id' => '11',
            'name_product' => 'Asparagus and Egg Poche Salad',
            'description' => 'Fresh green asparagus salad, poached egg, parmesan cheese and honey mustard vinaigrette.',
            'id_category' => '4',
            'price' => '15.99',
            'picture' => 'ensaladaEsparragos.jpg',
        ]);

        Product::create([
            'id' => '12',
            'name_product' => 'Signature Sushi with Salmon and Avocado',
            'description' => 'Creative sushi with thin slices of salmon, avocado and sesame reduced soy sauce.',
            'id_category' => '1',
            'price' => '19.99',
            'picture' => 'sushi.jpg',
        ]);

        Product::create([
            'id' => '13',
            'name_product' => 'Duck Magret with Pumpkin Purée',
            'description' => 'Grilled duck breast with a smooth pumpkin puree and cranberry sauce.',
            'id_category' => '3',
            'price' => '26.75',
            'picture' => 'Magret.jpg',
        ]);

        Product::create([
            'id' => '14',
            'name_product' => 'Beetroot and Goat Cheese Carpaccio',
            'description' => 'Thin slices of beetroot with herb-marinated goat´s cheese and balsamic vinaigrette.',
            'id_category' => '4',
            'price' => '17.50',
            'picture' => 'carpaccioRemolacha.jpg',
        ]);

        Product::create([
            'id' => '15',
            'name_product' => 'Baked Sea Bass with Fresh Herbs',
            'description' => 'Baked fresh sea bass with a mixture of fresh herbs and olive oil, accompanied by grilled vegetables.',
            'id_category' => '1',
            'price' => '28.99',
            'picture' => 'lubina.jpg',
        ]);

        Product::create([
            'id' => '16',
            'name_product' => 'Lamb Tacos with Yoghurt Sauce',
            'description' => 'Grilled lamb tacos with yoghurt sauce, fresh mint and cucumber slices.',
            'id_category' => '3',
            'price' => '21.99',
            'picture' => 'tacoCordero.jpg',
        ]);

        Product::create([
            'id' => '17',
            'name_product' => 'Kale and Pomegranate Salad',
            'description' => 'Healthy salad of fresh kale, pomegranate seeds, walnuts and lemon-honey vinaigrette.',
            'id_category' => '4',
            'price' => '16.25',
            'picture' => 'ensaladaKale.jpg',
        ]);

        Product::create([
            'id' => '18',
            'name_product' => 'Salmon Sushi with Sweet Soy Sauce',
            'description' => 'Sushi rolls filled with fresh salmon, avocado and sweet soy sauce.',
            'id_category' => '1',
            'price' => '20.99',
            'picture' => 'sushiSalmon.jpg',
        ]);

        Product::create([
            'id' => '19',
            'name_product' => 'Turkey Breast Stuffed with Spinach and Cheese',
            'description' => 'Turkey breast stuffed with spinach and cheese, baked to perfection and served with honey mustard sauce.',
            'id_category' => '3',
            'price' => '19.75',
            'picture' => 'rolloPavo.jpg',
        ]);

        Product::create([
            'id' => '20',
            'name_product' => 'Cream of Mushroom Soup with Croutons',
            'description' => 'Smooth cream of mushroom soup with homemade bread croutons and fresh chives.',
            'id_category' => '4',
            'price' => '14.99',
            'picture' => 'crema-champinones.jpg',
        ]);

        Product::create([
            'id' => '21',
            'name_product' => 'Shrimp Tacos with Mango Sauce',
            'description' => 'Grilled shrimp tacos with mango salsa, fresh cilantro and pickled red onion.',
            'id_category' => '1',
            'price' => '17.50',
            'picture' => 'tacosCamaron.jpg',
        ]);

        Product::create([
            'id' => '22',
            'name_product' => 'Lamb Chops with Rosemary Sauce',
            'description' => 'Grilled lamb chops with a rich rosemary sauce and served with mashed potatoes.',
            'id_category' => '3',
            'price' => '29.99',
            'picture' => 'cordero.jpg',
        ]);

        Product::create([
            'id' => '23',
            'name_product' => 'Quinoa and Avocado Salad',
            'description' => 'Refreshing salad of quinoa, avocado, tomato and coriander, dressed with lemon and olive oil.',
            'id_category' => '4',
            'price' => '15.75',
            'picture' => 'ensaladaQuinoa.jpg',
        ]);

        Product::create([
            'id' => '24',
            'name_product' => 'Avocado and Cucumber Sushi',
            'description' => 'Sushi rolls filled with avocado, cucumber and sesame-soy dressing.',
            'id_category' => '1',
            'price' => '18.99',
            'picture' => 'sushiAguacate.webp',
        ]);

        Product::create([
            'id' => '25',
            'name_product' => 'Duck Magret with Orange Sauce',
            'description' => 'Duck breast with orange, cooked to perfection and served with an orange and fresh herbs sauce.',
            'id_category' => '3',
            'price' => '25.50',
            'picture' => 'magretNaranja.jpg',
        ]);

        Product::create([
            'id' => '26',
            'name_product' => 'Watercress and Strawberry Salad',
            'description' => 'Fresh salad of watercress, strawberries, walnuts and goat cheese, dressed with balsamic vinaigrette.',
            'id_category' => '4',
            'price' => '16.99',
            'picture' => 'EnsaladaBerros.jpg',
        ]);

        Product::create([
            'id' => '27',
            'name_product' => 'Lemon Sole with Almonds',
            'description' => 'Fillet of sole cooked in lemon butter and toasted almonds, served with mashed potatoes.',
            'id_category' => '1',
            'price' => '26.99',
            'picture' => 'lenguado.jpg',
        ]);

        Product::create([
            'id' => '28',
            'name_product' => 'Barbecue Glazed Pork Ribs',
            'description' => 'Glazed pork ribs with homemade barbecue sauce, served with grilled corn.',
            'id_category' => '3',
            'price' => '21.75',
            'picture' => 'costillas.jpg',
        ]);

        Product::create([
            'id' => '29',
            'name_product' => 'Watermelon and Mint Gazpacho',
            'description' => 'Refreshing watermelon gazpacho with mint leaves and extra virgin olive oil.',
            'id_category' => '4',
            'price' => '12.99',
            'picture' => 'gazpacho-sandia.jpg',
        ]);

        Product::create([
            'id' => '30',
            'name_product' => 'Lobster Ravioli with Saffron Sauce',
            'description' => 'Ravioli stuffed with lobster in a delicate saffron and cream sauce, garnished with caviar.',
            'id_category' => '1',
            'price' => '34.50',
            'picture' => 'Raviolis.jpg',
        ]);

    }
}
