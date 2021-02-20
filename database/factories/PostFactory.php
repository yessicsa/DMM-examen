<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(100, 200),
            'slug' => $this->faker->slug,
            'descripcion' => $this->faker->text(100, 200),
            'image' => $this->faker->imageUrl(1280, 720),
            'user_id' => rand(1, 10),
            'category_id' => rand(1,10),
            


        ];
    }
}

