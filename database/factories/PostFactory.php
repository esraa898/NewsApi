<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word(),
            'content'=>$this->faker->text(maxNbChars:200),
             'featured_img'=>$this->faker->imageUrl(),
             'voteup'=>$this->faker->numberBetween(1,50),
             'votedown'=>$this->faker->numberBetween(1,50),
             'date_written'=> now(),
             'user_id'=>$this->faker->numberBetween(1,50),
              'category_id'=>$this->faker->numberBetween(1,15),
              

        ];
    }
}
 