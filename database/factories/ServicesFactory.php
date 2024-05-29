<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(mt_rand(2,4)),
            'excerpt'=>$this->faker->paragraph(mt_rand(2,4)),
            'title'=>fake()->sentence(mt_rand(2,4)),
            
        ];
    }
}