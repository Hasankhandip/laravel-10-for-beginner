<?php
namespace Database\Seeders;

use App\Models\Vat;
use Illuminate\Database\Seeder;

class VatSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ($i = 0; $i < 49; $i++) {
            Vat::create([
                'name'    => fake()->name(),
                'topping' => fake()->randomElement(),
                'price'   => fake()->randomDigit(),
            ]);
        }
    }
}
