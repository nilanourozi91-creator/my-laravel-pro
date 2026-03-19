<?php

namespace Database\Factories;

use App\Models\myLibrary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<myLibrary>
 */
class MyLibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title'=>fake()->title(),
            'author'=>fake()->name(),
            'rateing'=>fake()->randomNumber(1,2,3,4,5)
        ];
    }
}
