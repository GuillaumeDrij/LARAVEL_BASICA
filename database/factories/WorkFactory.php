<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'title' => $this->faker->word,
        'content' => $this->faker->paragraph(4),
        'image' => $this->faker->imageUrl(640, 480),
    //    'inSlider' => $this->faker-> 
        'created_at' => now(),
      ];
  }
}