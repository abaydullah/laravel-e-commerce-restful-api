<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\String\Slugger\slug;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
            $name  = fake()->company();
        return [
            'name' => $name,
            'slug' => Str::slug($name,'-'),
        ];
    }
}
