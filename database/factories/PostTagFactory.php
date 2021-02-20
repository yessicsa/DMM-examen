<?php

namespace Database\Factories;

use App\Models\post_tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post_tag::class;

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
            
            'tag_id' => rand(1,100),
        ];
    }
}
