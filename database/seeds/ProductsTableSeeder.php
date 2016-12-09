<?php

use Illuminate\Database\Seeder;
require_once 'vendor/autoload.php';
require_once 'Candy.php';
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = array('sold', 'on_cart', 'available');
        $descriptions = array('A yummy sweet candy everyone would love!', 'A fun-sized sweet treat for all ages!',
      'An awesome colorful pop that will surely make you smile!', 'Sweet, juicy and flavorful', 'Your mouth will surely love this',
      'A big lollipop that lasts for a day!', 'Stretchy toffee candy covered in strawberry syrup', 'Crunchy caramel');
        $rand_key = array_rand($input);
        $desc_key = array_rand($descriptions);
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\Candy($faker));

    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
	            'item' => $faker->candy,
	            'description' => $descriptions[array_rand($descriptions)],
	            'status'=>$input[array_rand($input)],
              'available_items'=>rand(0,50),
	        ]);
        }
    }
}
