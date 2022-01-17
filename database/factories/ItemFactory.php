<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>ucfirst($this->faker->unique()->words(4,true)),
            'stock'=>$this->faker->numberBetween(10,50),
            'precio'=>$this->faker->randomFloat(2,1,5000),
            'category_id'=>Category::all()->random()->id
        ];
    }
}
