<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(3),
            'description'=>$this->faker->paragraph(),
            'category'=>$this->faker->randomElement(['web','mobile', 'game','Ai']),
            'thumbnail'=> 'https://picsum.photos/300/200?random=' . $this->faker->unique()->numberBetween(1, 100),
            'url'=>$this->faker->url()
            //
        ];
    }
}
