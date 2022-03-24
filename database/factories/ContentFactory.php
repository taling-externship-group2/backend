<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $no = 1;
        $title = 'This class_Id is ' . $no++;
        return [
            'user_id' => '1',
            'title' => $title
        ];
    }
}
