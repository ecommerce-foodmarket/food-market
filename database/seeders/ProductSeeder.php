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
            'name_product' => 'Ceviche de Vieiras con Espuma de Mango',
            'description' => 'Vieiras frescas marinadas en jugo de limón con una suave espuma de mango y toques de cilantro.',
            'id_category' => '1',
            'price' => '18.99',
            'picture' => 'ceviche_vieiras.jpg',
        ]);

        Product::create([
            'id' => '2',
            'name_product' => 'Tartar de Atún con Salsa de Maracuyá',
            'description' => 'Delicioso tartar de atún fresco servido con una salsa de maracuyá y crujientes tostadas de sésamo.',
            'id_category' => '1',
            'price' => '22.50',
            'picture' => 'tartar_atun.jpg',
        ]);

        Product::create([
            'id' => '3',
            'name_product' => 'Risotto de Setas Salvajes',
            'description' => 'Arroz cremoso cocinado con una mezcla de setas silvestres, caldo de champiñones y parmesano rallado.',
            'id_category' => '2',
            'price' => '20.99',
            'picture' => 'risotto_setas.jpg',
        ]);

        Product::create([
            'id' => '4',
            'name_product' => 'Salmón Glaseado con Salsa de Miso',
            'description' => 'Filete de salmón glaseado con una deliciosa salsa de miso y acompañado de verduras al vapor.',
            'id_category' => '1',
            'price' => '24.75',
            'picture' => 'salmon_glaseado.jpg',
        ]);

        Product::create([
            'id' => '5',
            'name_product' => 'Cochinillo Asado con Pure de Manzana',
            'description' => 'Crujiente cochinillo asado lentamente y servido con un suave puré de manzana y salsa de romero.',
            'id_category' => '3',
            'price' => '32.99',
            'picture' => 'cochinillo_asado.jpg',
        ]);

        Product::create([
            'id' => '6',
            'name_product' => 'Tartar de Remolacha y Queso de Cabra',
            'description' => 'Tartar refrescante de remolacha, queso de cabra y nueces, aliñado con vinagreta balsámica.',
            'id_category' => '4',
            'price' => '16.50',
            'picture' => 'tartar_remolacha.jpg',
        ]);

        Product::create([
            'id' => '7',
            'name_product' => 'Pasta Fresca con Trufa Negra',
            'description' => 'Pasta casera cocida al dente con una generosa cantidad de trufa negra y queso parmesano.',
            'id_category' => '2',
            'price' => '28.99',
            'picture' => 'pasta_trufa.jpg',
        ]);

        Product::create([
            'id' => '8',
            'name_product' => 'Langosta a la Parrilla con Salsa de Ajo',
            'description' => 'Langosta fresca a la parrilla con mantequilla de ajo y hierbas, acompañada de espárragos a la brasa.',
            'id_category' => '1',
            'price' => '42.75',
            'picture' => 'langosta_parrilla.jpg',
        ]);

        Product::create([
            'id' => '9',
            'name_product' => 'Taco de Pulpo con Guacamole',
            'description' => 'Taco de pulpo a la brasa con guacamole casero, pico de gallo y cilantro fresco.',
            'id_category' => '4',
            'price' => '14.25',
            'picture' => 'taco_pulpo.jpg',
        ]);

        Product::create([
            'id' => '10',
            'name_product' => 'Solomillo de Ternera con Reducción de Vino Tinto',
            'description' => 'Jugoso solomillo de ternera cocido a la perfección, acompañado de una rica reducción de vino tinto.',
            'id_category' => '3',
            'price' => '36.50',
            'picture' => 'solomillo_ternera.jpg',
        ]);

        Product::create([
            'id' => '11',
            'name_product' => 'Ensalada de Espárragos y Huevo Poche',
            'description' => 'Ensalada fresca de espárragos verdes, huevo poché, queso parmesano y vinagreta de mostaza y miel.',
            'id_category' => '4',
            'price' => '15.99',
            'picture' => 'ensalada_esparragos.jpg',
        ]);

        Product::create([
            'id' => '12',
            'name_product' => 'Sushi de Autor con Salmón y Aguacate',
            'description' => 'Sushi creativo con finas láminas de salmón, aguacate y salsa de soja reducida con sésamo.',
            'id_category' => '1',
            'price' => '19.99',
            'picture' => 'sushi_autor.jpg',
        ]);

        Product::create([
            'id' => '13',
            'name_product' => 'Magret de Pato con Puré de Calabaza',
            'description' => 'Magret de pato a la parrilla con un suave puré de calabaza y salsa de arándanos rojos.',
            'id_category' => '3',
            'price' => '26.75',
            'picture' => 'magret_pato.jpg',
        ]);

        Product::create([
            'id' => '14',
            'name_product' => 'Carpaccio de Remolacha y Queso de Cabra',
            'description' => 'Finas láminas de remolacha con queso de cabra marinado en hierbas y vinagreta balsámica.',
            'id_category' => '4',
            'price' => '17.50',
            'picture' => 'carpaccio_remolacha.jpg',
        ]);

        Product::create([
            'id' => '15',
            'name_product' => 'Lubina al Horno con Hierbas Frescas',
            'description' => 'Lubina fresca al horno con una mezcla de hierbas frescas y aceite de oliva, acompañada de vegetales asados.',
            'id_category' => '1',
            'price' => '28.99',
            'picture' => 'lubina_horno.jpg',
        ]);

        Product::create([
            'id' => '16',
            'name_product' => 'Tacos de Cordero con Salsa de Yogur',
            'description' => 'Tacos de cordero a la parrilla con salsa de yogur, menta fresca y rodajas de pepino.',
            'id_category' => '3',
            'price' => '21.99',
            'picture' => 'tacos_cordero.jpg',
        ]);

        Product::create([
            'id' => '17',
            'name_product' => 'Ensalada de Kale y Granada',
            'description' => 'Ensalada saludable de kale fresco, granos de granada, nueces y vinagreta de limón y miel.',
            'id_category' => '4',
            'price' => '16.25',
            'picture' => 'ensalada_kale.jpg',
        ]);

        Product::create([
            'id' => '18',
            'name_product' => 'Sushi de Salmón con Salsa de Soja Dulce',
            'description' => 'Rolls de sushi rellenos de salmón fresco, aguacate y salsa de soja dulce.',
            'id_category' => '1',
            'price' => '20.99',
            'picture' => 'sushi_salmón.jpg',
        ]);

        Product::create([
            'id' => '19',
            'name_product' => 'Pechuga de Pavo Rellena de Espinacas y Queso',
            'description' => 'Pechuga de pavo rellena de espinacas y queso, horneada a la perfección y servida con salsa de mostaza y miel.',
            'id_category' => '3',
            'price' => '19.75',
            'picture' => 'pechuga_pavo.jpg',
        ]);

        Product::create([
            'id' => '20',
            'name_product' => 'Crema de Champiñones con Crutones',
            'description' => 'Crema suave de champiñones con crutones de pan casero y cebollino fresco.',
            'id_category' => '4',
            'price' => '14.99',
            'picture' => 'crema_champiñones.jpg',
        ]);

        Product::create([
            'id' => '21',
            'name_product' => 'Tacos de Camarones con Salsa de Mango',
            'description' => 'Tacos de camarones a la parrilla con salsa de mango, cilantro fresco y cebolla morada encurtida.',
            'id_category' => '1',
            'price' => '17.50',
            'picture' => 'tacos_camarones.jpg',
        ]);

        Product::create([
            'id' => '22',
            'name_product' => 'Chuletas de Cordero con Salsa de Romero',
            'description' => 'Chuletas de cordero a la parrilla con una rica salsa de romero y acompañadas de puré de patatas.',
            'id_category' => '3',
            'price' => '29.99',
            'picture' => 'chuletas_cordero.jpg',
        ]);

        Product::create([
            'id' => '23',
            'name_product' => 'Ensalada de Quinua y Aguacate',
            'description' => 'Ensalada refrescante de quinua, aguacate, tomate y cilantro, aliñada con limón y aceite de oliva.',
            'id_category' => '4',
            'price' => '15.75',
            'picture' => 'ensalada_quinua.jpg',
        ]);

        Product::create([
            'id' => '24',
            'name_product' => 'Sushi de Aguacate y Pepino',
            'description' => 'Rolls de sushi rellenos de aguacate, pepino y aderezo de sésamo y soja.',
            'id_category' => '1',
            'price' => '18.99',
            'picture' => 'sushi_aguacate.jpg',
        ]);

        Product::create([
            'id' => '25',
            'name_product' => 'Magret de Pato con Salsa de Naranja',
            'description' => 'Magret de pato a la naranja, cocido a la perfección y acompañado de una salsa de naranja y hierbas frescas.',
            'id_category' => '3',
            'price' => '25.50',
            'picture' => 'magret_pato_naranja.jpg',
        ]);

        Product::create([
            'id' => '26',
            'name_product' => 'Ensalada de Berros y Fresas',
            'description' => 'Ensalada fresca de berros, fresas, nueces y queso de cabra, aliñada con vinagreta balsámica.',
            'id_category' => '4',
            'price' => '16.99',
            'picture' => 'ensalada_berros.jpg',
        ]);

        Product::create([
            'id' => '27',
            'name_product' => 'Lenguado al Limón con Almendras',
            'description' => 'Filete de lenguado cocido a la mantequilla de limón y almendras tostadas, servido con puré de patatas.',
            'id_category' => '1',
            'price' => '26.99',
            'picture' => 'lenguado_limon.jpg',
        ]);

        Product::create([
            'id' => '28',
            'name_product' => 'Costillas de Cerdo Glaseadas con Barbacoa',
            'description' => 'Costillas de cerdo glaseadas con salsa de barbacoa casera, acompañadas de maíz a la parrilla.',
            'id_category' => '3',
            'price' => '21.75',
            'picture' => 'costillas_cerdo.jpg',
        ]);

        Product::create([
            'id' => '29',
            'name_product' => 'Gazpacho de Sandía con Hierbabuena',
            'description' => 'Refrescante gazpacho de sandía con hojas de hierbabuena y aceite de oliva virgen extra.',
            'id_category' => '4',
            'price' => '12.99',
            'picture' => 'gazpacho_sandia.jpg',
        ]);

        Product::create([
            'id' => '30',
            'name_product' => 'Raviolis de Langosta con Salsa de Azafrán',
            'description' => 'Raviolis rellenos de langosta en una delicada salsa de azafrán y crema, decorados con caviar.',
            'id_category' => '2',
            'price' => '34.50',
            'picture' => 'raviolis_langosta.jpg',
        ]);
        
    }
}
