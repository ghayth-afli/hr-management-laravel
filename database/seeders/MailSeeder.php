<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mail;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::create([
            'type' => 'En cours de traitement',
            'objet' => 'Candidature bien reçu',
            'contenu' => 'Nous avons bien reçu votre candidature et nous vous remercions de l’intérêt que vous portez à ama group. Nous allons étudier vos expériences et qualifications dans les plus brefs délais. Si votre profil correspond à nos attentes, un membre de notre équipe entrera en contact avec vous.'
        ]);

        Mail::create([
            'type' => 'Invitation d\'entretien',
            'objet' => 'Invitation à un entretien',
            'contenu' => 'Suite à l’étude de votre candidature, nous avons le plaisir de vous inviter à passer des entretiens physiques dans nos locaux, situé au {adresse à compléter} à {indiquer l’horaire de l’entretien d’embauche}. A cette occasion, vous rencontrerez Monsieur {nom à compléter} responsable de {fonction à préciser}.

            Dans le but de vous permettre de réussir au mieux cette série d’entretien d’embauche, nous vous invitons à consulter notre site internet {lien à intégrer}, dans lequel, vous trouverez plus d’informations sur notre activité.
            
            Nous vous invitons à confirmer votre présence, par la simple réponse à cette e-mail.
            
            Nous restons à votre disposition quant aux différentes questions que vous pourriez rencontrer, et nous vous souhaitons une bonne réussite dans cette série d’entretien.
            
            Bien cordialement,'
        ]);

        Mail::create([
            'type' => 'Refus de candidature',
            'objet' => 'Réponse à votre candidature au poste de ',
            'contenu' => 'En réponse à votre candidature, je suis au regret de devoir vous informer que celle-ci n\'a pas été retenue.

            Soyez cependant assuré que cette décision ne met pas en cause vos qualités personnelles, ni même celles de votre formation.
            
            Nous sommes très sensibles à l\'intérêt que vous portez à notre entreprise, et conservons vos coordonnées afin de vous recontacter au besoin.
            
            Nous vous souhaitons une pleine réussite dans vos recherches futures.'
        ]);
    }
}
