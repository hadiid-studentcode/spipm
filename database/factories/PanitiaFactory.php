<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panitia>
 */
class PanitiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nba' => $this->faker->postcode(),
            'wa' => $this->faker->e164PhoneNumber(),
            'jk' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'jabatan' => $this->faker->randomElement([
                'Ketua Panitia',
                'Sekretaris Panitia',
                'Bendahara Panitia',
                'Divisi Acara',
                'Divisi Konsumsi',
                'Divisi Pendanaan',
                'Divisi Humas',
                'Divisi Perlengkapan',
                'Divisi Dokumentasi',
                'Anggota Divisi Acara',
                'Anggota Divisi Konsumsi',
                'Anggota Divisi Pendanaan',
                'Anggota Divisi Humas',
                'Anggota Divisi Perlengkapan',
                'Anggota Divisi Dokumentasi'


            ]),
            'foto' => ''
        ];
    }
}
