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
        $rand_key = array_rand($input);
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\Candy($faker));

    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
	            'item' => $faker->candy,
	            'description' => str_random(35),
	            'status'=>$input[$rand_key],
              'available_items'=>rand(0,50),
	        ]);
        }
    }
}
