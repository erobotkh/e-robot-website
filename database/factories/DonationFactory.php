<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'acc_number'=>fake()->creditCardNumber(),
            'acc_type'=>'Dollar',
            'qr_code'=>'QRDollar.jpg',
            'currency_symbol'=>'$',
            'recipient_name'=>fake()->asciify('user-****'),
            'Recipient_position'=>'finance',
        ];
    }
}
