<?php

namespace Database\Factories;

use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = $this->faker->sentence();
        $time_sub = $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $created_at = Carbon::now()->subDay($time_sub);
        $time_add = $this->faker->randomElement([0,1]);
        $updated_at = Carbon::now()->subDay($time_sub)->addDay($time_add);

        return [
            'title' => $sentence,
            'body' => $this->faker->text(),
            'excerpt' => $sentence,
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'category_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'created_at' => $created_at,
            'updated_at' => $updated_at,

        ];
    }
}
