<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class LinkGalleryCategoryFactory
 *
 * @package Database\Factories
 */
class LinkGalleryCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gallery_item_id' => rand(1, 20),
            'gallery_item_category_id' => rand(1, 5),
        ];
    }
}
