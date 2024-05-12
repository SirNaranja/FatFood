<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'ingredientes' => $this->faker->sentence,
            'section' => $this->faker->randomElement(['burgers', 'sides']),
            'allergens' => $this->faker->boolean,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'url' => $this->faker->imageUrl(),
        ];
    }
}
