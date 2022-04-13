<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "tour_date" => $this->faker->date(),
            "status" => false,
            "booking_code" => $this->faker->unique()->randomNumber(6, true),
            "quantity" => $this->faker->randomDigitNotNull(),
            'name' => $this->faker->name(),
            "phone_number" => "0812".$this->faker->unique()->randomNumber(8, true),
            "email" => $this->faker->freeEmail(),
            "address" => $this->faker->city(),
            "tour_id" =>  mt_rand(1,20)
        ];
    }

    
}
