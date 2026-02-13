<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = collect($this->getAllArticles())->map(function($article) {
            return (object) $article;
        });
        
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $articleData = $this->getArticleBySlug($slug);
        
        if (!$articleData) {
            abort(404);
        }

        // Convertir en objet
        $article = (object) $articleData;
        
        // Articles similaires
        $relatedArticlesData = $this->getRelatedArticles($articleData);
        $relatedArticles = collect($relatedArticlesData)->map(function($article) {
            return (object) $article;
        });

        return view('articles.show', compact('article', 'relatedArticles'));
    }

    private function getArticleBySlug($slug)
    {
        $articles = $this->getAllArticles();
        
        return collect($articles)->firstWhere('slug', $slug);
    }

    private function getRelatedArticles($currentArticle)
    {
        $articles = $this->getAllArticles();
        
        return collect($articles)
            ->filter(function($article) use ($currentArticle) {
                return $article['slug'] !== $currentArticle['slug'] && 
                       $article['category'] === $currentArticle['category'];
            })
            ->take(3)
            ->values()
            ->toArray();
    }

    private function getAllArticles()
    {
        return [
            [
                'slug' => 'exposition-croisements-sacres',
                'title' => 'Exposition "Croisements Sacrés"',
                'excerpt' => 'Venez découvrir notre nouvelle exposition mettant en lumière le dialogue entre l\'art sacré et la culture créole.',
                'content' => '
                    <h2>Un dialogue entre deux mondes</h2>
                    <p>L\'exposition "Croisements Sacrés" présente une collection unique d\'œuvres qui explorent les intersections entre l\'art chrétien traditionnel et les expressions culturelles de la Martinique.</p>
                    
                    <h3>Les artistes exposés</h3>
                    <p>Cette exposition met en vedette des artistes locaux et internationaux qui ont su marier les techniques classiques de l\'art sacré avec les couleurs et les rythmes de la Caraïbe.</p>
                    
                    <blockquote>
                        <p>"L\'art sacré n\'a pas de frontières. Il parle un langage universel qui résonne particulièrement fort dans notre île."</p>
                        <cite>– Marie Dubois, Commissaire d\'exposition</cite>
                    </blockquote>
                    
                    <h3>Les temps forts</h3>
                    <ul>
                        <li>Visites guidées tous les samedis à 15h</li>
                        <li>Ateliers pour enfants le mercredi</li>
                        <li>Conférences d\'artistes le jeudi soir</li>
                    </ul>
                    
                    <p>N\'hésitez pas à nous contacter pour organiser des visites de groupe ou des activités éducatives.</p>
                ',
                'image' => 'https://picsum.photos/seed/exposition-sacree/1200/600.jpg',
                'category' => 'Exposition',
                'category_color' => 'red',
                'author' => 'Marie Dubois',
                'author_role' => 'Commissaire d\'exposition',
                'published_at' => now()->subDays(3),
                'reading_time' => 5,
                'views' => 1247,
                'tags' => ['art-sacre', 'exposition', 'culture-creole', 'martinique']
            ],
            [
                'slug' => 'atelier-icones-jeunes',
                'title' => 'Atelier d\'icônes pour jeunes',
                'excerpt' => 'Un atelier créatif pour initier les jeunes à l\'art des icônes chrétiennes avec une touche martiniquaise.',
                'content' => '
                    <h2>Initiation à l\'art iconographique</h2>
                    <p>Nos ateliers d\'icônes pour jeunes offrent une opportunité unique de découvrir cet art millénaire tout en y apportant une sensibilité créole contemporaine.</p>
                    
                    <h3>Pédagogie adaptée</h3>
                    <p>Nos animateurs spécialisés adaptent leur enseignement aux tranches d\'âge :</p>
                    <ul>
                        <li><strong>8-12 ans :</strong> Découverte des bases et des symboles</li>
                        <li><strong>13-17 ans :</strong> Techniques avancées et création personnelle</li>
                    </ul>
                    
                    <h3>Matériel fourni</h3>
                    <p>Tout le matériel nécessaire est fourni : pigments naturels, feuilles d\'or, bois préparé, pinceaux spéciaux.</p>
                    
                    <h3>Inscriptions</h3>
                    <p>Les ateliers ont lieu le samedi de 9h à 12h. Places limitées à 12 participants par session.</p>
                ',
                'image' => 'https://picsum.photos/seed/atelier-icones/1200/600.jpg',
                'category' => 'Atelier',
                'category_color' => 'amber',
                'author' => 'Pierre Laurent',
                'author_role' => 'Artiste iconographe',
                'published_at' => now()->subDays(7),
                'reading_time' => 3,
                'views' => 892,
                'tags' => ['atelier', 'icones', 'jeunesse', 'art-sacre']
            ],
            [
                'slug' => 'conference-patrimoine-religieux',
                'title' => 'Conférence sur le patrimoine religieux',
                'excerpt' => 'Une conférence passionnante sur l\'histoire et la préservation du patrimoine religieux de la Martinique.',
                'content' => '
                    <h2>Un patrimoine à préserver</h2>
                    <p>La Martinique possède un riche patrimoine religieux qui témoiste de notre histoire. Cette conférence explore les défis de sa préservation.</p>
                    
                    <h3>Les intervenants</h3>
                    <p>Des experts de renom partageront leurs connaissances :</p>
                    <ul>
                        <li>Dr. Jean Martin - Historien du patrimoine</li>
                        <li>Marie-Claire Dubois - Architecte du patrimoine</li>
                        <li>Père Antoine - Curé de la Cathédrale</li>
                    </ul>
                    
                    <h3>Thèmes abordés</h3>
                    <ul>
                        <li>L\'architecture des églises martiniquaises</li>
                        <li>Les œuvres d\'art sacré à préserver</li>
                        <li>Les financements disponibles</li>
                        <li>La participation citoyenne</li>
                    </ul>
                    
                    <h3>Informations pratiques</h3>
                    <p>Date : 5 Juin 2024 à 18h<br>Lieu : Salle des fêtes de la Mairie<br>Entrée libre dans la limite des places disponibles</p>
                ',
                'image' => 'https://picsum.photos/seed/conference-patrimoine/1200/600.jpg',
                'category' => 'Conférence',
                'category_color' => 'green',
                'author' => 'Dr. Jean Martin',
                'author_role' => 'Historien du patrimoine',
                'published_at' => now()->subDays(10),
                'reading_time' => 4,
                'views' => 2156,
                'tags' => ['patrimoine', 'conference', 'histoire', 'preservation']
            ]
        ];
    }
}