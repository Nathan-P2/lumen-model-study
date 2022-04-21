<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
    	return [
    	  'name' => $this->faker->name(),
        'description' => $this->faker->sentence(),
        'status' => 1,
        'created_at' => $this->faker->dateTime(),
        'updated_at' => $this->faker->dateTime()
    	];
    }
}
