<?php

namespace Database\Factories;

use App\Models\Festival;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Festivals>
 */
class FestivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Festival::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'picture' => $this->faker->text,
            'description'=> $this->faker->text,
            'category' => $this->faker->text,
            'start_date' => $this->faker->dateTimeThisYear,
            'end_date' => $this->faker->dateTimeThisYear,
            'place' => $this->faker->city

        ];
    }
}
