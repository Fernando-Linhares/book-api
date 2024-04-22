<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private static int $less = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getUnicCategory();
    }

    private function getUnicCategory(): array
    {
        $categories = $this->getListCategories();

        $category = $categories[self::$less];

        self::$less++;

        return $category;
    }

    public function getAmount()
    {
        return $this->getListCategories()->count();
    }

    public function getListCategories(): Collection
    {
        return collect([
            [
                'name' => 'ficion science'
            ],
            [
                'name' => 'romance'
            ],
            [
                'name' => 'horror'
            ],
            [
                'name' => 'comedy'
            ],
            [
                'name' => 'adventure'
            ],
        ]);
    }
}
