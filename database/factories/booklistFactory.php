<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class booklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


    //   $table->id();
    //         $table->string('title');
    //         $table->string('author');
    //         $table->integer('rating');
    //         $table->timestamps();
        return [
            'title'=>fake()->name(),
            'authore'=>fake()->name(),
            'rating'=>fake()->random_int(),
        ];
    }
}
