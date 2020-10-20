<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName;
        $email = $name . "@" . $this->faker->freeEmailDomain;
        $fullname = $name . " " . $this->faker->lastName;

        return [
            'name' => $fullname,
            'email' => $email,
            'phone' => $this->faker->phoneNumber,

        ];
    }
}
