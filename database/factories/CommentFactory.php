<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'content'=>$this->faker->text(maxNbChars:100),
            
             'date_written'=> now(),
             'user_id'=>$this->faker->numberBetween(1,50),
              'post_id'=>$this->faker->numberBetween(1,200),
              
        ];
    }
}
 