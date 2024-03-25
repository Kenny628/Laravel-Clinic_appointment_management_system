<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class patient_recordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            // add record with appointment
            $appointment = Appointment::query()->whereStatus('DONE')->inRandomOrder()->first();
            $appointmentId = $appointment['id'];
            $doctorId = $appointment->doctor_id;
            $patientId = $appointment->user_id;

        return [
            'patient_id' => $patientId,
            'doctor_id' => $doctorId,
            'appointment_id' => $appointmentId, 
            'symptoms' => implode(', ', $this->faker->randomElements(self::$common_symptoms, rand(1, 5))),
            'diagnosis' => $this->faker->randomElement(['Cancer', 'Diabetes','Heart disease','HIV/AIDS','Influenza (flu)','Hepatitis','Arthritis','Asthma','Obesity','Malaria','Tuberculosis']),
            'prescription' => implode(', ', $this->faker->randomElements(self::$medicine, rand(2, 5))),
            'test_result' => $this->faker->randomElement(['negative', 'positive'])
        ];
    }

    private static $common_symptoms = [
        'Fever',
        'Sore throat',
        'Chills',
        'Cough',
        'Runny or stuffy nose',
        'Body aches',
        'Headache',
        'Nausea or vomiting',
        'Diarrhea',
        'red or irritated eyes',
    ];
    static private $medicine = [
        'Acetaminophen (Tylenol)',
        'Ibuprofen (Advil, Motrin)',
        'Aspirin',
        'Naproxen (Aleve)',
        'Diphenhydramine (Benadryl)',
        'Loratadine (Claritin)',
        'Cetirizine (Zyrtec)',
        'Fexofenadine (Allegra)',
        'Ranitidine (Zantac)',
        'Omeprazole (Prilosec)',
    ];
}
