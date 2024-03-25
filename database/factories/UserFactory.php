<?php

namespace Database\Factories;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $role = $this->faker->randomElement(['patient', 'doctor']);
        
        $expertise = '';
        if ($role === 'doctor') {
            $expertise = $this->faker->randomElement(['Cardiologist: specializes in diagnosing and treating conditions related to the heart and circulatory system.', 'Neurologist: focuses on the diagnosis and treatment of conditions affecting the brain, spinal cord, and nerves.','Oncologist: specializes in the diagnosis and treatment of cancer.','Dermatologist: focuses on diagnosing and treating skin-related conditions, including skin cancer.','Gynecologist: specializes in the female reproductive system and associated conditions.','Psychiatrist: focuses on diagnosing and treating mental health disorders.']);
        }
        
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password for all users
            'role' => $role,
            'ic' => $this->faker->regexify('(([1-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01])-([0-9]{2})-([0-9]{4})'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'expertise' => $expertise,
            'profilePic' => $this->faker->randomElement(['https://xsgames.co/randomusers/assets/avatars/male/67.jpg', 'https://xsgames.co/randomusers/assets/avatars/male/71.jpg','https://xsgames.co/randomusers/assets/avatars/male/69.jpg','https://xsgames.co/randomusers/assets/avatars/female/68.jpg','https://xsgames.co/randomusers/assets/avatars/female/55.jpg']),    
            'phone' => $this->faker->unique()->numerify("01#-#######"),
            'remember_token' => Str::random(10),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
