<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->country(),
            "authorid"=>$this->faker->randomNumber(1,10),
            "title"=>$this->faker->title,
            "ISBN"=>$this->faker->randomNumber(1,5),
            "pub_year"=>$this->faker->date(),
            "available"=>$this->faker->randomElements([1,0]),
        ];
    }
}
