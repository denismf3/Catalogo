<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->words(3, true),
            'referencia' => fake()->unique()->bothify('REF-####'),
            'codigo' => fake()->unique()->numberBetween(1000, 9999),
            'valor' => fake()->randomFloat(2, 10, 500),
            'ativo' => fake()->boolean(85),
            'imagem' => null,
        ];
    }
}
