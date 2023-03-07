<?php

namespace Database\Factories;

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          =>  $faker->name,
            'description'   =>  $faker->realText(100),
            'parent_id'     =>  1,
            'menu'          =>  1,
        ];
    }
}
