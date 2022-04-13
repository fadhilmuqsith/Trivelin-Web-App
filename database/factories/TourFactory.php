<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => "Paket Wisata ". mt_rand(1,5) . " Hari ke " . $this->faker->city(),
            "description" => $this->faker->text(150),
            "travel_route" => "<ul><li>Bantingmurung</li><li>Pantai Losari</li><li>Museum Fort Retterdam</li><li>Pulau Samalona</li></ul>",
            "itinary" => "<p>". $this->faker->text(50) ."</p>",
            "price" => "Rp.500.000",
            "price_detail" => "<p>Harga belum temasuk pajak</p>",
            "id_kota" => mt_rand(1,8)
        ];
    }
}
