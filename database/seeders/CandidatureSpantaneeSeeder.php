<?php

namespace Database\Seeders;
use App\Models\Recrutement;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CandidatureSpantaneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recrutement::create([
            'poste' => 'CANDIDATURE SPONTANÉE',
            'nbr_poste' => 0,
            'lieu' => '',
            'type' => '',
            'experience' => 0,
            'niveau_etude' => 0,
            'langue' => '',
            'genre' => 'Indifférent',
            'description' => '',
            'exigences' => '',
            'date_expiration' => Carbon::now(),
            'user_id' => 1,
            'departement_id' => 0

        ]);
    }
}
