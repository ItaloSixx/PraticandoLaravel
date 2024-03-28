<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paid = $this->faker->boolean();
        return [
            'user_id' => User::factory(), 
            'type' => $this->faker->randomElement(['A', 'B', 'C']),
            'paid' => $paid,
            'value' => $this->faker->numberBetween(1000, 2000),
            'payment_date' => $paid ? $this->faker->dateTimeThisMonth() : null, 
        ];
    }
}
