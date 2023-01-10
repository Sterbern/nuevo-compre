<?php

namespace Database\Factories;

use App\Models\Datos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datos>
 */
class DatosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Datos::class;

    public function definition()
    {        
        return [
            'cuit' => $this->faker->phoneNumber(),
            'razon_social' => $this->faker->name(),            
            //'id_localidad' => $this->faker->numberBetween(1,999),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'fec_ven' => $this->faker->date(),
            'productos' => $this->faker->paragraph(),
            'chapa_sticker' => $this->faker->sentence(),
            //'id_tipo' => $this->faker->numberBetween(1,3),
            'nuevo' => $this->faker->randomElement(['0','1']),
            'fec_reg' => $this->faker->date(),
            'estatus' => $this->faker->randomElement(['0','1'])
        ];
    }
}
