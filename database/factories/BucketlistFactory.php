<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bucketlist>
 */
class BucketlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title,
            'description'=>fake()->text,
            'category'=>fake()->randomElement(["Hobby", "Travel", "Relationship"]),
            'status'=>fake()->randomElement(["Pending", "In Progress", "Completed"]),
            'deadline'=>fake()->date(),
            'image'=>fake()->imageUrl(),
            'user_id'=>User::factory()
        ];
    }
}
