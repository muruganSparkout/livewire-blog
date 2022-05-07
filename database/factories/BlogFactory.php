<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'category_id'=>1,
            'admin_id'=>1,
            'content'=>$this->faker->paragraph(),
            'thumbnail'=>'blog/thumb/thumb-card'.rand(1,8).'.png',
            'image'=>'blog/blog'.rand(1,4).'.png',
            'views'=>rand(1,100)
        ];
    }
}
