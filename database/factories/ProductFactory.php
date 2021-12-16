<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' =>$this->faker->sentence(3),
            'descripcion' =>$this->faker->paragraph(1),
            'precio' =>$this->faker->randomFloat(2,3,100),
            'stock' =>$this->faker->numberBetween(1,10),
            'estado' =>$this->faker->randomElement(['available','unavailable'])
        ];
    }
}
