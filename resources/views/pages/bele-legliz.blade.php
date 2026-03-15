@extends('layouts.app')

@section('title', 'Bélè Légliz - Traditions Martiniquaises')

@section('content')
<!-- Hero Section -->
<section class="relative h-96 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/bele-legliz/hero.jpg') }}" alt="Bélè Légliz" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-red-900/90 to-red-800/80"></div>
    </div>
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">Bélè Légliz</h1>
            <p class="text-xl text-white/90 mb-6">Traditions sacrées et musique créole au cœur de la Martinique</p>
            <div class="flex flex-wrap gap-4">
                <a href="#tradition" class="px-6 py-3 bg-white text-red-800 rounded-lg font-semibold hover:bg-red-50 transition-colors">
                    Découvrir la tradition
                </a>
                <a href="#groupe" class="px-6 py-3 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-red-800 transition-colors">
                    Le groupe
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Navigation fixe -->
<nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-md z-40 hidden" id="fixed-nav">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-3">
            <div class="flex items-center">
                <span class="text-red-800 font-bold text-xl">Bélè Légliz</span>
            </div>
            <div class="flex space-x-6">
                <a href="#origine" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Origines</a>
                <a href="#tradition" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Tradition</a>
                <a href="#groupe" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Le groupe</a>
                <a href="#bureau" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Bureau</a>
                <a href="#galerie" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Galerie</a>
                <a href="#medias" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Médias</a>
                <a href="#evenements" class="text-gray-700 hover:text-red-800 font-medium transition-colors">Événements</a>
            </div>
        </div>
    </div>
</nav>

<!-- Audio Player Fixe -->
<div id="audio-player" class="fixed bottom-0 left-0 right-0 bg-red-900 text-white p-4 z-50 transition-transform duration-300">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <button id="play-pause" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                </svg>
            </button>
            <div>
                <h3 class="font-semibold">Chant de Noël créole</h3>
                <p class="text-sm opacity-80">Groupe Bélè Légliz • 3:45</p>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <div class="w-64 bg-white/20 rounded-full h-2">
                <div class="bg-white h-2 rounded-full" style="width: 35%"></div>
            </div>
            <span class="text-sm">1:15 / 3:45</span>
            <button id="toggle-audio" class="w-8 h-8 flex items-center justify-center hover:bg-white/20 rounded transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Contenu principal -->
<section class="container mx-auto px-4 py-16">
    <!-- 1. Origines -->
    <article id="origine" class="relative scroll-mt-24">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Origines du Bélè Légliz</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Le Bélè Légliz est une tradition musicale et spirituelle unique née de la fusion entre les rituels africains 
                    apportés par les esclaves et la liturgie catholique imposée par les colons français. Cette synthèse culturelle 
                    représente une forme remarquable de résistance et d'adaptation spirituelle.
                </p>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Né de la rencontre entre les traditions africaines apportées par les esclaves et le catholicisme imposé par les colons, 
                    le Bélè Légliz représente une forme de résistance culturelle et d'adaptation spirituelle unique à la Martinique.
                </p>
                <div class="bg-red-50 border-l-4 border-red-800 p-4 my-6">
                    <p class="text-sm italic text-red-900">
                        "Le BLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. l'âme de notre peuple qui s'exprime à travers les siècles, 
                        un pont entre nos racines africaines et notre foi chrétienne."
                    </p>
                    <p class="text-sm text-right mt-2 text-red-700">- Lorem Ipsum is simply</p>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-3 text-red-800">Repères historiques</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>1635:</strong> Arrivée des premiers colons français en Martinique</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>1685:</strong> Code Noir réglementant la pratique religieuse des esclaves</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>1848:</strong> Abolition de l'esclavage et préservation des traditions</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>1975:</strong> Première reconnaissance officielle du Bélè Légliz</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>2020:</strong> Classement au patrimoine culturel immatériel de la Martinique</span>
                    </li>
                </ul>
            </div>
        </div>
    </article>

    <!-- 2. Tradition -->
    <article id="tradition" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">La tradition du Bélè Légliz</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4 text-red-700">Les instruments</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Le Bélè Légliz traditionnel utilise plusieurs instruments caractéristiques :
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Tibwa:</strong> Deux baguettes de bois frappées l'une contre l'autre</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Tanbou bélé:</strong> Tambour traditionnel martiniquais</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Chacha:</strong> Maracas créoles</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Mambo:</strong> Tambour plus grave marquant le rythme</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 text-red-700">Les célébrations</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Le Bélè Légliz est particulièrement présent lors des grandes célébrations religieuses :
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Noël:</strong> Chants de Noël traditionnels en créole</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Pâques:</strong> Célébrations de la Résurrection avec danses rituelles</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Fêtes patronales:</strong> Célébrations des saints patrons des communes</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-800 mr-2">•</span>
                        <span><strong>Mariages et baptêmes:</strong> Intégration des chants traditionnels</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="mt-8 bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-4 text-red-700">La signification spirituelle</h3>
            <p class="text-gray-600 leading-relaxed">
                Au-delà de son aspect musical, le Bélè Légliz représente une forme de spiritualité unique où se mêlent foi chrétienne 
                et héritage africain. Les chants, souvent en créole, transforment les prières traditionnelles en hymnes collectifs 
                qui renforcent la communauté et perpétuent une identité culturelle spécifiquement martiniquaise.
            </p>
        </div>
    </article>

    <!-- 3. Le groupe Bélè Légliz -->
    <article id="groupe" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Le groupe Bélè Légliz</h2>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:w-1/3">
                    <img src="{{ asset('images/bele-legliz/groupe.jpg') }}" alt="Le groupe Bélè Légliz" class="w-full h-full object-cover">
                </div>
                <div class="md:w-2/3 p-8">
                    <h3 class="text-2xl font-bold text-red-800 mb-4">Ambassadeurs de la tradition</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Le groupe Bélè Légliz, fondé en 1998, est composé de 12 musiciens et chanteurs passionnés dédiés à la préservation 
                        et à la transmission de ce patrimoine unique. Sous la direction artistique de Maître Lorem Ipsum , 
                        le groupe a parcouru le monde pour faire découvrir cette tradition martiniquaise.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Avec plus de 500 représentations à leur actif, le groupe Bélè Légliz est devenu une référence incontournable 
                        de la musique traditionnelle martiniquaise, alliant authenticité et renouveau créatif.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-800 mb-2">Récompenses</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• Lorem Ipsum </li>
                                <li>• Lorem Ipsum </li>
                                <li>• Lorem Ipsum </li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-800 mb-2">Statistiques</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• 12 artistes permanents</li>
                                <li>• 2 albums enregistrés</li>
                                <li>• 4 pays visités</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Membres du groupe -->
        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4 text-red-700">Les membres du groupe</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-2 flex items-center justify-center">
                        <span class="text-2xl text-gray-600">JMR</span>
                    </div>
                    <h4 class="font-semibold">Lorem Ipsum </h4>
                    <p class="text-sm text-gray-600">Lorem Ipsum </p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-2 flex items-center justify-center">
                        <span class="text-2xl text-gray-600">MB</span>
                    </div>
                    <h4 class="font-semibold">Lorem Ipsum </h4>
                    <p class="text-sm text-gray-600">Lorem Ipsum </p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-2 flex items-center justify-center">
                        <span class="text-2xl text-gray-600">PC</span>
                    </div>
                    <h4 class="font-semibold">Lorem Ipsum </h4>
                    <p class="text-sm text-gray-600">Lorem Ipsum </p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-2 flex items-center justify-center">
                        <span class="text-2xl text-gray-600">AD</span>
                    </div>
                    <h4 class="font-semibold">Lorem Ipsum </h4>
                    <p class="text-sm text-gray-600">Lorem Ipsum </p>
                </div>
            </div>
        </div>
    </article>

    <!-- 4. Bureau de l'association -->
    <article id="bureau" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Bureau de l'association</h2>
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-red-700">Direction</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lorem Ipsum </h4>
                                <p class="text-sm text-gray-600">Président</p>
                                <p class="text-sm text-gray-700 mt-1">Description</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lorem Ipsum </h4>
                                <p class="text-sm text-gray-600">Vice-présidente</p>
                                <p class="text-sm text-gray-700 mt-1">Description</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lorem Ipsum </h4>
                                <p class="text-sm text-gray-600">Secrétaire général</p>
                                <p class="text-sm text-gray-700 mt-1">Description</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-red-700">Trésorerie et membres</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Description</h4>
                                <p class="text-sm text-gray-600">Trésorière</p>
                                <p class="text-sm text-gray-700 mt-1">Comptable, gestionnaire des finances de l'association</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lorem Ipsum </h4>
                                <p class="text-sm text-gray-600">Conseiller technique</p>
                                <p class="text-sm text-gray-700 mt-1">Description</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <span class="font-bold">NA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lorem Ipsum </h4>
                                <p class="text-sm text-gray-600">Responsable communication</p>
                                <p class="text-sm text-gray-700 mt-1">Description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                <h4 class="font-semibold text-lg mb-3 text-red-800">Réunions du bureau</h4>
                <p class="text-gray-700 mb-3">Le bureau se réunit tous les premiers mardis du mois à 18h au siège de l'association.</p>
                <p class="text-gray-700">Pour contacter un membre du bureau : <a href="mailto:bureau@belelegliz.org" class="text-red-800 hover:underline">bureau@belelegliz.org</a></p>
            </div>
        </div>
    </article>

    <!-- 5. Galerie photo -->
    <article id="galerie" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Galerie photo</h2>
        <p class="text-gray-600 leading-relaxed mb-8">
            Découvrez à travers ces images la richesse des célébrations du Bélè Légliz, les costumes traditionnels, 
            les instruments et la ferveur des participants lors de ces moments uniques.
        </p>
        
        <!-- Galerie photo avec lightbox -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8" id="photo-gallery">
            @for ($i = 1; $i <= 6; $i++)
                <div class="photo-item relative group cursor-pointer" data-index="{{ $i }}">
                    <img src="{{ asset("images/bele-legliz/photo{$i}.jpg") }}" 
                         alt="Bélè Légliz {{$i}}" 
                         class="rounded-lg shadow-lg w-full h-60 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-white text-center p-2">
                            <p class="font-semibold">Photo {{ $i }}</p>
                            <p class="text-sm">Cliquez pour agrandir</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        
        <!-- Lightbox masquée par défaut -->
        <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
            <button id="close-lightbox" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
            <img id="lightbox-img" src="" alt="" class="max-w-full max-h-full rounded-lg">
            <div class="absolute bottom-4 left-0 right-0 text-center text-white">
                <p id="lightbox-caption" class="text-lg"></p>
            </div>
            <button id="prev-photo" class="absolute left-4 text-white text-3xl">&lt;</button>
            <button id="next-photo" class="absolute right-4 text-white text-3xl">&gt;</button>
        </div>
    </article>

    <!-- 6. Médias -->
    <article id="medias" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Médias</h2>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4 text-red-700">Concert Live Festival 2025</h3>
                <div class="relative pb-[56.25%] rounded-lg overflow-hidden shadow-lg">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/oJL3PSF_MTs" 
                            title="Documentaire Bélè Légliz" frameborder="0" allowfullscreen></iframe>
                </div>
                <p class="text-gray-600 leading-relaxed mt-4">
                    Découvrez le concert live où les chants créoles fusionnent avec la liturgie chrétienne, 
                    offrant un spectacle unique en Martinique.
                </p>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold mb-4 text-red-700">Performance rituelle</h3>
                <div class="relative pb-[56.25%] rounded-lg overflow-hidden shadow-lg">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/EXEMPLE_VIDEO2" 
                            title="Performance Bélè Légliz" frameborder="0" allowfullscreen></iframe>
                </div>
                <p class="text-gray-600 leading-relaxed mt-4">
                    La vidéo ci-dessous montre l'usage des tambours traditionnels et la danse rythmée 
                    qui accompagnent les célébrations.
                </p>
            </div>
        </div>
        
        <!-- Section podcasts -->
        <div class="mt-12 bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-4 text-red-700">Podcasts & Interviews</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold">Histoire du Bélè</h4>
                            <p class="text-sm text-gray-600">25 min</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 mb-3">Interview avec l'historien Martin M. sur les origines du Bélè Légliz.</p>
                    <button class="podcast-play text-red-800 text-sm font-medium hover:text-red-600" data-audio="audio/histoire-bele.mp3" data-title="Histoire du Bélè" data-subtitle="Interview avec Martin M. • 25 min">Écouter →</button>
                </div>
                
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold">Les instruments</h4>
                            <p class="text-sm text-gray-600">18 min</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 mb-3">Démonstration des instruments traditionnels par le groupe Légliz Bwa Kaj.</p>
                    <button class="podcast-play text-red-800 text-sm font-medium hover:text-red-600" data-audio="audio/instruments.mp3" data-title="Les instruments" data-subtitle="Groupe Légliz Bwa Kaj • 18 min">Écouter →</button>
                </div>
                
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center text-white mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold">Transmission</h4>
                            <p class="text-sm text-gray-600">32 min</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 mb-3">Comment les jeunes générations perpétuent cette tradition aujourd'hui.</p>
                    <button class="podcast-play text-red-800 text-sm font-medium hover:text-red-600" data-audio="audio/transmission.mp3" data-title="Transmission" data-subtitle="Jeunes générations • 32 min">Écouter →</button>
                </div>
            </div>
        </div>
    </article>

    <!-- 7. Événements -->
    <article id="evenements" class="relative scroll-mt-24 mt-16">
        <h2 class="text-3xl font-bold text-red-800 mb-6">Événements à venir</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">
                <div class="h-40 bg-red-800 flex items-center justify-center text-white">
                    <div class="text-center">
                        <p class="text-3xl font-bold">15</p>
                        <p class="text-lg">Décembre</p>
                        <p class="text-sm">2023</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Bélè de Noël</h3>
                    <p class="text-gray-600 text-sm mb-3">Église de Sainte-Marie, 19h</p>
                    <p class="text-gray-700 text-sm">Célébration traditionnelle de Noël avec chants créoles et danses rituelles.</p>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">
                <div class="h-40 bg-red-800 flex items-center justify-center text-white">
                    <div class="text-center">
                        <p class="text-3xl font-bold">07</p>
                        <p class="text-lg">Avril</p>
                        <p class="text-sm">2024</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Semaine Sainte</h3>
                    <p class="text-gray-600 text-sm mb-3">Cathédrale de Fort-de-France, 18h</p>
                    <p class="text-gray-700 text-sm">Célébrations pascales avec chants traditionnels du Bélè Légliz.</p>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">
                <div class="h-40 bg-red-800 flex items-center justify-center text-white">
                    <div class="text-center">
                        <p class="text-3xl font-bold">23</p>
                        <p class="text-lg">Juin</p>
                        <p class="text-sm">2024</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Festival du Bélè</h3>
                    <p class="text-gray-600 text-sm mb-3">Parc de la Savane, 17h</p>
                    <p class="text-gray-700 text-sm">Festival annuel célébrant les traditions du Bélè avec de nombreux groupes.</p>
                </div>
            </div>
        </div>
    </article>
</section>

<!-- Script pour les fonctionnalités interactives -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navigation fixe
    const fixedNav = document.getElementById('fixed-nav');
    const heroSection = document.querySelector('.relative.h-96');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > heroSection.offsetHeight - 100) {
            fixedNav.classList.remove('hidden');
        } else {
            fixedNav.classList.add('hidden');
        }
    });
    
    // Toggle audio player
    const toggleAudio = document.getElementById('toggle-audio');
    const audioPlayer = document.getElementById('audio-player');
    let isMinimized = false;
    
    toggleAudio.addEventListener('click', function() {
        isMinimized = !isMinimized;
        if (isMinimized) {
            audioPlayer.style.transform = 'translateY(calc(100% - 60px))';
            toggleAudio.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            `;
        } else {
            audioPlayer.style.transform = 'translateY(0)';
            toggleAudio.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            `;
        }
    });
    
    // Lightbox pour la galerie photo
    const photoItems = document.querySelectorAll('.photo-item');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const closeLightbox = document.getElementById('close-lightbox');
    const prevPhoto = document.getElementById('prev-photo');
    const nextPhoto = document.getElementById('next-photo');
    let currentPhotoIndex = 0;
    
    photoItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            currentPhotoIndex = index;
            showLightbox(index);
        });
    });
    
    function showLightbox(index) {
        const img = photoItems[index].querySelector('img');
        lightboxImg.src = img.src;
        lightboxCaption.textContent = `Photo ${index + 1} - Bélè Légliz`;
        lightbox.classList.remove('hidden');
    }
    
    closeLightbox.addEventListener('click', function() {
        lightbox.classList.add('hidden');
    });
    
    prevPhoto.addEventListener('click', function() {
        currentPhotoIndex = (currentPhotoIndex - 1 + photoItems.length) % photoItems.length;
        showLightbox(currentPhotoIndex);
    });
    
    nextPhoto.addEventListener('click', function() {
        currentPhotoIndex = (currentPhotoIndex + 1) % photoItems.length;
        showLightbox(currentPhotoIndex);
    });
    
    // Fermer la lightbox en cliquant en dehors de l'image
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            lightbox.classList.add('hidden');
        }
    });
    
    // Navigation fluide vers les sections
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offset = 100; // Ajuster pour la hauteur du menu fixe
                const targetPosition = targetElement.offsetTop - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Gestion des podcasts avec fichiers audio locaux
    const podcastButtons = document.querySelectorAll('.podcast-play');
    const audioElement = new Audio();
    const playPauseBtn = document.getElementById('play-pause');
    const audioTitle = document.querySelector('#audio-player h3');
    const audioSubtitle = document.querySelector('#audio-player p.text-sm');
    const progressBar = document.querySelector('#audio-player .bg-white');
    const currentTimeDisplay = document.querySelector('#audio-player span.text-sm');
    
    // Créer des fichiers audio factices pour la démo
    const audioFiles = {
        'audio/histoire-bele.mp3': 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmwhBzGH0fPTgjMGHm7A7+OZURE',
        'audio/instruments.mp3': 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmwhBzGH0fPTgjMGHm7A7+OZURE',
        'audio/transmission.mp3': 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmwhBzGH0fPTgjMGHm7A7+OZURE'
    };
    
    podcastButtons.forEach(button => {
        button.addEventListener('click', function() {
            const audioPath = this.getAttribute('data-audio');
            const title = this.getAttribute('data-title');
            const subtitle = this.getAttribute('data-subtitle');
            
            // Mettre à jour le lecteur
            audioTitle.textContent = title;
            audioSubtitle.textContent = subtitle;
            
            // Charger et jouer l'audio
            audioElement.src = audioFiles[audioPath] || audioPath;
            
            audioElement.play().then(() => {
                // Mettre à jour l'icône du bouton play/pause
                playPauseBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                `;
            }).catch(error => {
                console.error('Erreur de lecture audio:', error);
                // Afficher un message d'erreur
                this.textContent = 'Erreur de lecture';
                setTimeout(() => {
                    this.textContent = 'Écouter →';
                }, 2000);
            });
            
            // Faire défiler vers le lecteur
            document.getElementById('audio-player').scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
    
    // Gestion du bouton play/pause principal
    playPauseBtn.addEventListener('click', function() {
        if (audioElement.paused) {
            audioElement.play();
            this.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            `;
        } else {
            audioElement.pause();
            this.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                </svg>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            `;
        }
    });
    
    // Mettre à jour la barre de progression
    audioElement.addEventListener('timeupdate', function() {
        if (audioElement.duration) {
            const progressPercent = (audioElement.currentTime / audioElement.duration) * 100;
            progressBar.style.width = progressPercent + '%';
            
            const currentMinutes = Math.floor(audioElement.currentTime / 60);
            const currentSeconds = Math.floor(audioElement.currentTime % 60);
            const durationMinutes = Math.floor(audioElement.duration / 60);
            const durationSeconds = Math.floor(audioElement.duration % 60);
            
            currentTimeDisplay.textContent = `${currentMinutes}:${currentSeconds.toString().padStart(2, '0')} / ${durationMinutes}:${durationSeconds.toString().padStart(2, '0')}`;
        }
    });
});
</script>

@endsection