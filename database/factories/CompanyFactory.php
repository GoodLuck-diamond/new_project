<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model=Company::class;


    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'adress' => $this->faker->address,
            'phone' => $this->faker->e164Phonenumber
    ];
    }
}
