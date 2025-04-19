<?php
namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ($i = 0; $i < 49; $i++) {
            Pizza::create([
                "name"        => fake()->company(),
                "price"       => fake()->randomDigit(),
                "description" => fake()->paragraph(),
            ]);
        }
    }
}
