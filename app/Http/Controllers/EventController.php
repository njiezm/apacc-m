<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Je mets les événements ici pour qu'ils soient accessibles
    // Dans une vraie application, ils viendraient d'une base de données
    private $events = [
        [
            'title' => 'Atelier (réservé aux adultes)',
            'date' => '28 Février 2026',
            'time' => '9h00 - 13h00',
            'location' => 'Saint-Christophe',
            'category' => 'atelier',
            'category_label' => 'Atelier',
            'image' => 'atelier28',
            'description' => 'Plongez dans l\'élégance de l\'écriture à la plume et découvrez les bases de la calligraphie italique, telle qu\'elle se pratiquait au XVIᵉ siècle.',
            'registration_deadline' => '2026-02-25'
        ],
        [
            'title' => 'Concert de Pâques',
            'date' => '21 Juin 2025',
            'time' => '14h00 - 17h00',
            'location' => 'Centre culturel, FDF',
            'category' => 'concert',
            'category_label' => 'Concert',
            'image' => 'concertexemple',
            'description' => 'Un concert spirituel en l\'honneur de Pâques, mêlant chorales gospel et pièces de musique sacrée classique.',
            'registration_deadline' => '2025-06-20'
        ],
        [
            'title' => 'N° 5 de la revue TRANSANDAS',
            'date' => '15 Mars 2026',
            'time' => 'N/A',
            'location' => 'Martinique',
            'category' => 'revue',
            'category_label' => 'Revue',
            'image' => 'transandas5',
            'description' => 'Découvrez le dernier numéro de notre revue dédiée au patrimoine religieux martiniquais.',
            'registration_deadline' => '2026-02-28'
        ],
        [
            'title' => 'Festival de l\'Art Sacré 2025',
            'date' => '10 Juin 2025',
            'time' => 'Toute la journée',
            'location' => 'Divers lieux en Martinique',
            'category' => 'festival',
            'category_label' => 'Festival',
            'image' => 'festival2025',
            'description' => 'Retour sur notre festival annuel qui a rassemblé des artistes locaux et internationaux.',
            'registration_deadline' => '2025-05-31'
        ],
        [
            'title' => 'Conférence : "L\'icône, fenêtre sur l\'invisible"',
            'date' => '5 Mai 2025',
            'time' => '18h00',
            'location' => 'Médiathèque de Schoelcher',
            'category' => 'conference',
            'category_label' => 'Conférence',
            'image' => 'conferenceicone',
            'description' => 'Une conférence immersive pour comprendre la théologie et la technique derrière la création d\'icônes.',
            'registration_deadline' => '2025-05-02'
        ],
        [
            'title' => 'Circuit découverte : Les églises du Sud',
            'date' => '20 Avril 2025',
            'time' => '8h00 - 18h00',
            'location' => 'Départ de FDF',
            'category' => 'circuits',
            'category_label' => 'Circuits découvertes',
            'image' => 'circuitsud',
            'description' => 'Une journée guidée à la découverte du patrimoine architectural et artistique des églises du sud de l\'île.',
            'registration_deadline' => '2025-04-17'
        ],
        [
            'title' => 'Rencontre avec l\'artiste',
            'date' => '12 Mars 2025',
            'time' => '16h00',
            'location' => 'Galerie APACC-M',
            'category' => 'rencontres',
            'category_label' => 'Rencontres',
            'image' => 'rencontreartiste',
            'description' => 'Venez échanger avec un artiste local sur son processus créatif et l\'inspiration de la foi dans son œuvre.',
            'registration_deadline' => '2025-03-10'
        ]
    ];

    public function filter(Request $request)
    {
        $category = $request->get('category', 'all');

        $filteredEvents = $this->events;
        if ($category !== 'all') {
            $filteredEvents = array_filter($this->events, function ($event) use ($category) {
                return $event['category'] === $category;
            });
        }

        // On retourne le HTML du partial
        return view('partials._events_grid', [
            'filteredEvents' => $filteredEvents
        ])->render();
    }
}