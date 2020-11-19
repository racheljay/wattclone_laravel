<?php

namespace Database\Factories;

use App\Models\Story;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class StoryFactory extends Factory {
    protected $model = Story::class;

    public function definition() {
        return [
            'author_id' => $this->faker->randomDigitNot(0),
            'title' => $this->faker->catchPhrase,
            'desc' => $this->faker->realText,
            'content' => $this->faker->text,
            'img_url' => $this->faker->imageUrl($width = 400, $height = 600)
        ];
    }
}
