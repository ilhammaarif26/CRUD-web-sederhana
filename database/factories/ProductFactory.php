<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

// class ProductFactory extends Factory
// {
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = Product::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }
// }

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 3),
        'name' => $faker->sentence(),
        'price' => $faker->sentence(),
        'desc' => $faker->paragraph(10),
    ];
});
