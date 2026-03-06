@extends('layouts.app')

@section('title', 'Médiathèque - APACC-M')

@section('content')

@php
// NOUVELLES RESSOURCES BASÉES SUR VOS INSTRUCTIONS
 $featuredResources = [
    
    [
        'type' => 'pdf',
        'type_label' => 'Revue',
        'title' => 'Revue Transandans n°1',
        'desc' => 'Consultez gratuitement le premier numéro de la revue Transandans, une mine d\'or de réflexions sur la culture et la spiritualité.',
        'duration' => '45 min',
        'image' => 'revue-transandans',
        'url' => 'pdf/revue-transandans-1.pdf',
        'is_external' => false,
        'modal_id' => 'pdfModal1',
        'preview' => false // Affiche tout le PDF
    ],
    [
        'type' => 'pdf',
        'type_label' => 'Revue',
        'title' => 'Revue Transandans n°5',
        'desc' => 'Le dernier numéro de notre revue Transandans, explorant les frontières de la transcendance culturelle et spirituelle.',
        'duration' => '45 min',
        'image' => 'revue-transandans-5',
        'url' => 'pdf/revue-transandans-5.pdf',
        'is_external' => false,
        'modal_id' => 'pdfModal5',
        'preview' => true // Affiche seulement les 5 premières pages
    ],
    [
        'type' => 'article',
        'type_label' => 'Article / Réflexion',
        'title' => 'Dire le sacré en société animiste : « BWA BRILÉ » d\'Eugène MONA',
        'desc' => 'Une analyse profonde par Max BÉLAISE de l\'œuvre d\'Eugène Mona, explorant la rencontre du sacré chrétien et de l\'animisme.',
        'duration' => '15 min',
        'image' => 'bwa-brile-mona',
        'url' => 'articles/bwa-brile-mona.pdf',
        'is_external' => false,
        'modal_id' => 'articleModal'
    ],
    [
        'type' => 'article',
        'type_label' => 'Article / Réflexion',
        'title' => 'ÉDUQUONS NOS REGARDS - La spiritualité sous nos yeux',
        'desc' => '« Nos îles, de par leur diversité écologique, nous offrent toutes sortes de sollicitations
visuelles. Les villes qui ont été bâties suite à l’effondrement du système d’habitation-
plantation...',
        'duration' => '15 min',
        'image' => 'sous-nos-yeux',
        'url' => 'articles/sous-nos-yeux.pdf',
        'is_external' => false,
        'modal_id' => 'articleModal1'
    ],
    [
        'type' => 'gallery',
        'type_label' => 'Galerie',
        'title' => 'Retour en images sur le festival 2025...',
        'desc' => 'Plongez au cœur des moments forts de notre dernier festival, entre célébrations, partages et découvertes artistiques.',
        'duration' => '12 min',
        'image' => 'festival-archive',
        'url' => '#',
        'is_external' => false,
        'modal_id' => 'galleryModal'
    ],
    [
        'type' => 'article',
        'type_label' => 'Histoire',
        'title' => 'Histoire de la Cathédrale St-Louis',
        'desc' => 'Découvrez les étapes de construction, les architectes et les secrets de l\'un des plus joyaux du patrimoine martiniquais.',
        'duration' => '20 min',
        'image' => 'cathedrale-st-louis',
        'url' => '#',
        'is_external' => false,
        'modal_id' => 'histoireCathedraleModal'
    ],
    [
        'type' => 'article',
        'type_label' => 'Histoire',
        'title' => 'Histoire du Vitrail',
        'desc' => 'De l\'art roman aux créations contemporaines, explorez l\'évolution fascinante du vitrail dans les édifices sacrés.',
        'duration' => '25 min',
        'image' => 'histoire-vitrail',
        'url' => '#',
        'is_external' => false,
        'modal_id' => 'histoireVitrailModal'
    ],
    [
        'type' => 'formation',
        'type_label' => 'Formation',
        'title' => 'La Géométrie Sacrée',
        'desc' => 'Introduction aux principes fondamentaux qui régissent l\'architecture des temples et des églises à travers les âges.',
        'duration' => '30 min',
        'image' => 'geometrie-sacree',
        'url' => '#',
        'is_external' => false,
        'modal_id' => 'formationModal',
        'external_link' => 'https://example.com/formation-geometrie-sacree' // Lien pour réserver
    ],
    [
        'type' => 'video',
        'type_label' => 'Vidéo',
        'title' => 'Les traditions créoles',
        'desc' => 'Découvrez les traditions qui façonnent la culture créole martiniquaise.',
        'duration' => '18 min',
        'image' => 'traditions-creoles',
        'url' => 'https://www.youtube.com/watch?v=ZEzXs7X5ut4&pp=ygUmdHJhZGl0aW9uIHJlbGlnaWV1c2UgY3Jlb2xlIGFydGlzdGlxdWU%3D',
        'is_external' => false,
        'modal_id' => 'videoModal'
    ],
    [
        'type' => 'audio',
        'type_label' => 'Podcast',
        'title' => 'Chants sacrés créoles',
        'desc' => 'Écoutez les chants traditionnels qui mêlent spiritualité chrétienne et rythmes créoles.',
        'duration' => '25 min',
        'image' => 'chants-sacres',
        'url' => 'audio/chants-sacres.mp3',
        'is_external' => false,
        'modal_id' => 'audioModal'
     ]
    // [
    //     'type' => 'external',
    //     'type_label' => 'Ressource externe',
    //     'title' => 'Archives numérisées',
    //     'desc' => 'Accédez à notre collection complète d\'archives numérisées sur notre partenaire.',
    //     'duration' => 'Illimité',
    //     'image' => 'archives-numerisees',
    //     'url' => 'https://archives-externes.example.com',
    //     'is_external' => true,
    //     'modal_id' => 'externalModal'
    // ]
];

// NOUVELLES DONNÉES POUR LA SECTION "NOS ACTIONS EN IMAGES"
$actionImages = [
    ['title' => 'Traduction', 'sub' => 'Les textes sacrés traduits en créole martiniquais', 'img' => 'traduction', 'description' => 'Des équipes de bénévole composée de passionné.e.s de la langue créole (linguiste
professionnel et amateur) travaillent sur la traduction des textes sacrés. Bientôt une
version des Évangiles en créole martiniquais.'],
    ['title' => 'Paramentique', 'sub' => 'Les parements en mode créoles', 'img' => 'paramentique', 'description' => 'Le pôle paramentique de l’APACC-M propose la création de parements liturgiques
ancrés dans la culture créole. Les talents des couturier.e.s, stylistes au service du
sacré en monde créole.'],
    ['title' => 'Culture et Société', 'sub' => 'Dialoguer le sacré en monde créole', 'img' => 'exposition-art', 'description' => 'Conférences, tables ronds, réflexions et rencontres avec les composantes de la
société martiniquaise sur la question du sacré et de la culture chrétienne.'],
    ['title' => "École d'Arts Sacrés", 'sub' => 'Former et transmettre le sacré', 'img' => 'atelier-geometrie', 'description' => 'Former et transmettre : les ateliers de l’Apacc-M forment aux pratiques artistiques de
l’art sacré, ses techniques, son histoire, son patrimoine.
Nos ateliers : iconographie, vitrail, callygraphie, art floral
Nos formations : cycle de formation “géométrie sacrée”, guide du patrimoine chrétien'],
];
@endphp

{{-- Hero Section - Style Sombre & Profond --}}
<header class="pt-16 pb-16 px-6 bg-gradient-to-b from-neutral-50 to-white border-b border-neutral-200">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col items-center text-center">
            <span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8">Archives & Savoir</span>

            <h1 class="font-display text-5xl md:text-8xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
                Média <br>
                <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">thèque</span>
            </h1>
            
            <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed italic mb-16">
                "Une immersion dans l'art et la spiritualité martiniquaise à travers des contenus sélectionnés."
            </p>

            {{-- Statistiques Minimalistes --}}
            <div class="flex gap-12 md:gap-24">
                @foreach(['Articles' => '150+', 'Vidéos' => '85', 'Audio' => '45'] as $label => $count)
                <div class="group">
                    <div class="text-3xl font-display font-light text-black mb-1 italic">{{ $count }}</div>
                    <div class="text-[9px] font-black text-red-900 uppercase tracking-widest opacity-60">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>

{{-- Barre de recherche & Filtres --}}
<section class="py-8 px-6 bg-neutral-50 border-b border-neutral-200">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-10">
            {{-- Recherche --}}
            <div class="w-full lg:max-w-md">
                <label class="text-[10px] font-black uppercase tracking-[0.3em] text-neutral-400 block mb-4">
                    Recherche
                </label>
                <input 
                    type="text" 
                    id="searchInput"
                    placeholder="Titre ou mot-clé..."
                    class="w-full border-b border-neutral-300 pb-4 text-lg font-light focus:outline-none focus:border-black transition-all"
                >
            </div>

            {{-- Filtres --}}
            <div class="flex gap-10 text-[11px] font-black uppercase tracking-widest">
                <button class="filter-btn active border-b-2 border-black pb-2" data-tab="all">Tout</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="article">Articles</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="pdf">PDF</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="video">Vidéos</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="audio">Audio</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="gallery">Galeries</button>
            </div>
        </div>
    </div>
</section>

{{-- Grille de Ressources --}}
<section class="py-16 px-6 bg-neutral-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12" id="resourceGrid">
            @foreach($featuredResources as $res)
            <article 
                class="resource-card group transition-all duration-500 ease-out"
                data-type="{{ $res['type'] }}"
                data-title="{{ strtolower($res['title']) }}"
            >
                {{-- Image --}}
                <div class="relative overflow-hidden mb-6">
                    <img 
    src="{{ asset('images/mediatheque/' . $res['image'] . '.jpg') }}"
    alt="{{ $res['title'] }}"
    class="w-full aspect-[16/10] object-cover transition-all duration-700 group-hover:scale-105"
>
                </div>

                {{-- Meta --}}
                <div class="flex items-center justify-between text-[9px] font-bold uppercase tracking-widest text-neutral-400 mb-3">
                    <span>{{ $res['type_label'] }}</span>
                    <span>{{ $res['duration'] }}</span>
                </div>

                {{-- Titre --}}
                <h3 class="text-lg font-bold uppercase tracking-tight mb-3 group-hover:text-red-900 transition-colors">
                    {{ $res['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-sm text-neutral-500 font-light leading-relaxed mb-6 line-clamp-2">
                    {{ $res['desc'] }}
                </p>

                {{-- Lien --}}
                <a 
                    href="{{ $res['url'] }}"
                    class="resource-link inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-widest border-b border-neutral-200 pb-1 hover:border-black transition-all"
                    data-external="{{ $res['is_external'] ? 'true' : 'false' }}"
                    data-modal="{{ $res['modal_id'] }}"
                    data-type="{{ $res['type'] }}"
                    data-url="{{ $res['url'] }}"
                    @if(isset($res['preview'])) data-preview="{{ $res['preview'] ? 'true' : 'false' }}" @endif
                    @if(isset($res['external_link'])) data-external-link="{{ $res['external_link'] }}" @endif
                >
                    {{ $res['is_external'] ? 'Consulter' : 'Lire' }}
                    <i class="fas {{ $res['is_external'] ? 'fa-external-link-alt' : 'fa-arrow-right' }} text-[8px]"></i>
                </a>
            </article>
            @endforeach
        </div>

        <div id="noResults" class="hidden py-20 text-center">
            <p class="text-xs font-black uppercase tracking-widest text-neutral-300">
                Aucun résultat trouvé
            </p>
        </div>
    </div>
</section>

{{-- Section "Nos actions en images" (anciennement "La parole en images") --}}
<section class="py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="font-display text-4xl font-bold mb-20 tracking-tighter uppercase">
            Nos actions <span class="italic serif font-light lowercase" style="font-family: 'Cinzel', serif;">en images</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($actionImages as $index => $action)
            <div class="group relative aspect-[3/4] overflow-hidden {{ $index % 2 != 0 ? 'lg:mt-12' : '' }}" 
                 style="border-radius: 120px 120px 20px 20px; cursor:pointer;" 
                 data-bs-toggle="modal" data-bs-target="#modalAction{{ $index }}">
                
                <img src="{{ asset('images/actions/' . $action['img'] . '.jpg') }}" 
                     class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-[2s]">
                
                <div class="absolute inset-0 bg-gradient-to-t from-red-900/90 via-red-900/20 to-transparent"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end items-center p-10 text-center">
                    <h4 class="font-bold text-white text-[30px] sm:text-[35px] md:text-[35px] mb-2 uppercase tracking-tighter text-center">
                        {{ $action['title'] }}
                    </h4>
                    <h6 class="text-sm font-light italic text-white lowercase tracking-widest mb-4 mt-5">
                        {{ $action['sub'] }}
                    </h6>
                </div>
            </div>

            <!-- Modal Bootstrap -->
            <div class="modal fade" id="modalAction{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $action['title'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    {{-- Ici, image différente et plus petite --}}
                    {{-- <img src="{{ asset('images/actions/modal/' . $action['img'] . '-small.jpg') }}" 
                         class="mx-auto mb-4 rounded max-w-[300px] h-auto"> --}}

                    <p class="text-gray-700 text-left whitespace-pre-line">
                        {{ $action['description'] ?? 'Description détaillée à ajouter pour ce bloc.' }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section "Restez informé" (anciennement "Lettre d'information") --}}
<section class="py-32 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <div class="inline-block p-4 bg-red-50 rounded-full mb-10">
            <i class="far fa-envelope text-red-900"></i>
        </div>
        <h2 class="text-3xl font-bold tracking-tighter uppercase mb-6">Restez informé</h2>
        <p class="text-gray-500 font-light italic mb-12">Recevez l'essentiel du patrimoine directement dans votre boîte mail.</p>

        <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="votre@email.com" class="flex-grow px-8 py-5 border border-gray-100 rounded-full focus:ring-0 focus:border-red-900 text-sm font-light italic">
            <button class="px-10 py-5 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all">S'abonner</button>
        </form>
    </div>
</section>

{{-- Modals pour différents types de contenu --}}

{{-- Modal PDF --}}
<div class="modal fade" id="pdfModal5" tabindex="-1" aria-labelledby="pdfModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModal5Label">Revue Transandans n°5</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <div class="d-flex justify-content-center mb-3">
                    <button id="togglePreview" class="btn btn-outline-primary">Afficher le document complet</button>
                </div> --}}
                <div id="pdfPreview" style="height: 600px; overflow: auto;">
                    <!-- Contenu des 5 premières pages -->
                    <iframe src="pdf/revue-transandans-5.pdf#page=1&view=FitV" width="100%" height="100%"></iframe>
                </div>
                <div id="pdfFull" class="d-none" style="height: 600px; overflow: auto;">
                    <!-- Contenu complet du PDF -->
                    <iframe src="pdf/revue-transandans-5.pdf" width="100%" height="100%"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="pdf/revue-transandans-5.pdf" class="btn btn-primary" target="_blank">Télécharger</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pdfModal1" tabindex="-1" aria-labelledby="pdfModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModal1Label">Revue Transandans n°1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="height: 600px; overflow: auto;">
                    <iframe src="pdf/revue-transandans-1.pdf" width="100%" height="100%"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="pdf/revue-transandans-1.pdf" class="btn btn-primary" target="_blank">Télécharger</a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Article --}}
<div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="articleModalLabel">Dire le sacré en société animiste : « BWA BRILÉ » d'Eugène MONA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="height: 600px; overflow: auto;">
                    <iframe src="articles/bwa-brile-mona.pdf" width="100%" height="100%"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="articles/bwa-brile-mona.pdf" class="btn btn-primary" target="_blank">Télécharger</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="articleModal1" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="articleModalLabel">ÉDUQUONS NOS REGARDS - La spiritualité sous nos yeux</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="height: 600px; overflow: auto;">
                    <iframe src="articles/bwa-brile-mona.pdf" width="100%" height="100%"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="articles/bwa-brile-mona.pdf" class="btn btn-primary" target="_blank">Télécharger</a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Galerie d'images --}}
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalLabel">Retour en images sur le festival 2025...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="festivalCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/festival/festival1.jpg') }}" class="d-block w-100" alt="Festival image 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ouverture du festival</h5>
                                <p>Cérémonie d'ouverture</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/festival/festival2.jpg') }}" class="d-block w-100" alt="Festival image 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Exposition d'art sacré</h5>
                                <p>Les œuvres des artistes locaux</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/festival/festival3.jpg') }}" class="d-block w-100" alt="Festival image 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Le Concert de bélè Légliz</h5>
                                <p>Ne sont-ils pas magnifiques !</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/festival/festival4.jpg') }}" class="d-block w-100" alt="Festival image 4">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Conférence/Débat</h5>
                                <p>Regards croisés sur l'esthétique et l'éthique en creolité</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/festival/festival5.jpg') }}" class="d-block w-100" alt="Festival image 5">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Grand concert</h5>
                                <p>Les 20 ans de Bélè Légliz !</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#festivalCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#festivalCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Histoire Cathédrale --}}
<div class="modal fade" id="histoireCathedraleModal" tabindex="-1" aria-labelledby="histoireCathedraleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="histoireCathedraleModalLabel">Histoire de la Cathédrale St-Louis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/histoire/cathedrale-st-louis.jpg') }}" class="img-fluid rounded mb-3" alt="Cathédrale St-Louis">
                        </div>
                        <div class="col-md-8">
                            <h4>Origines et construction</h4>
                            <p>La cathédrale Saint-Louis de Fort-de-France, édifice religieux majeur de la Martinique, fut construite à la fin du XIXe siècle sur les ruines de l'église précédente détruite par l'incendie de 1890. L'architecte Henri Picq dessina les plans de ce remarquable exemple d'architecture métisse, mêlant style néogothique et adaptations tropicales.</p>
                            
                            <h4 class="mt-4">Caractéristiques architecturales</h4>
                            <p>Sa structure en fer, ses murs épais et son système de ventilation ingénieux témoignent de l'adaptation aux contraintes climatiques tropicales. L'édifice se distingue par sa façade en pierre de taille, ses vitraux colorés et son clocher monumental qui domine le paysage urbain de Fort-de-France.</p>
                            
                            <h4 class="mt-4">Patrimoine culturel</h4>
                            <p>Classée monument historique en 1990, la cathédrale Saint-Louis représente un véritable patrimoine culturel et religieux pour la Martinique. Elle a été le témoin des grands moments de l'histoire de l'île, de l'esclavage à l'émancipation, et continue d'être un lieu de rassemblement spirituel et culturel pour la population martiniquaise.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Histoire Vitrail --}}
<div class="modal fade" id="histoireVitrailModal" tabindex="-1" aria-labelledby="histoireVitrailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="histoireVitrailModalLabel">Histoire du Vitrail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Origines et évolution</h4>
                            <p>L'art du vitrail remonte à l'Antiquité, mais c'est au Moyen Âge qu'il atteint son apogée dans les édifices religieux. Initialement simples verres colorés, les vitraux évoluent vers des compositions narratives complexes, racontant des histoires bibliques ou la vie des saints à une population majoritairement illettrée.</p>
                            
                            <h4 class="mt-4">Techniques et matériaux</h4>
                            <p>La fabrication des vitraux nécessite un savoir-faire complexe. Les artisans coupent des pièces de verre coloré qu'ils assemblent à l'aide de profils en plomb (les "vergetures"). Les détails sont ensuite peints sur le verre à l'aide de "grisaille", une peinture à base de poudre de verre et de liant, avant une cuisson qui fixe définitivement le décor.</p>
                            
                            <h4 class="mt-4">Symbolisme et lumière</h4>
                            <p>Au-delà de leur aspect décoratif, les vitraux ont une forte dimension symbolique. La lumière traversant les couleurs crée une atmosphère mystérieuse et sacrée, transformant l'espace intérieur de l'église en un lieu spirituel où le divin se manifeste à travers le jeu de lumière et de couleur.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/histoire/vitrail-1.jpg') }}" class="img-fluid rounded mb-3" alt="Vitrail">
                            <p>Vitrail de l'église de St-Christophe, Fort-de-France</p>
                            {{-- <img src="{{ asset('images/histoire/vitrail-2.jpg') }}" class="img-fluid rounded" alt="Vitrail détail"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Formation --}}
<div class="modal fade" id="formationModal" tabindex="-1" aria-labelledby="formationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formationModalLabel">La Géométrie Sacrée</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
<img src="{{ asset('images/mediatheque/geomaffiche.jpg') }}" class="img-fluid rounded mb-3" alt="Géométrie sacrée">                        </div>
                        <div class="col-md-6">
                            <h4>Principes fondamentaux</h4>
                            <p>La géométrie sacrée est l'étude des formes et des proportions qui structurent l'univers et que l'on retrouve dans la nature, l'art et l'architecture sacrée. Basée sur des rapports mathématiques harmonieux comme le nombre d'or (φ≈1,618) et la suite de Fibonacci, elle révèle les principes universels d'harmonie et d'équilibre.</p>
                            
                            <h4 class="mt-4">Applications dans l'architecture sacrée</h4>
                            <p>De la grande pyramide de Gizeh aux cathédrales gothiques, en passant par les temples hindous, la géométrie sacrée a guidé la conception des édifices religieux à travers les âges. Ces structures utilisent des formes géométriques précises (cercle, carré, triangle, spirale) pour créer des espaces qui favorisent l'élévation spirituelle et la connexion avec le divin.</p>
                            
                            <h4 class="mt-4">Notre formation</h4>
                            <p>Notre atelier de géométrie sacrée vous initiera aux principes fondamentaux et aux applications pratiques dans le contexte de l'architecture sacrée martiniquaise. Vous apprendrez à reconnaître ces proportions harmonieuses et à les appliquer dans vos propres créations artistiques ou architecturales.</p>
                            
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Prochaine session :</strong> 15-17 juillet 2026
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="https://example.com/formation-geometrie-sacree" target="_blank" class="btn btn-primary">Réserver ma place</a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Vidéo --}}
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Les traditions créoles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/ZEzXs7X5ut4" title="YouTube video" allowfullscreen></iframe>
                </div>
                <div class="p-3">
                    <p>Découvrez les traditions qui façonnent la culture créole martiniquaise, un mélange unique d'influences africaines, européennes et amérindiennes. Cette vidéo explore les coutumes, les célébrations et les savoir-faire qui ont traversé les générations pour former l'identité culturelle vibrante de la Martinique.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="https://www.youtube.com/watch?v=ZEzXs7X5ut4&pp=ygUmdHJhZGl0aW9uIHJlbGlnaWV1c2UgY3Jlb2xlIGFydGlzdGlxdWU%3D" target="_blank" class="btn btn-primary">Voir sur YouTube</a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Audio --}}
<div class="modal fade" id="audioModal" tabindex="-1" aria-labelledby="audioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="audioModalLabel">Chants sacrés créoles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('images/audio/chants-sacres.jpg') }}" class="img-fluid rounded mb-4" alt="Chants sacrés créoles">
                
                <div class="audio-player bg-light p-4 rounded mb-4">
                    <h6 class="mb-3">Le Nôtre Créole - Chant traditionnel</h6>
                    <audio controls class="w-100">
                        <source src="audio/chants-sacres.mp3" type="audio/mpeg">
                        Votre navigateur ne supporte pas l'élément audio.
                    </audio>
                </div>
                
                <p>Les chants sacrés créoles représentent une fusion unique entre la liturgie chrétienne et les rythmes traditionnels martiniquais. Nés de la rencontre entre les traditions africaines et européennes, ces chants expriment la spiritualité à travers un langage musical qui reflète l'identité culturelle de la Martinique.</p>
                
                <div class="mt-4">
                    <h6>Autres chants disponibles</h6>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Mèsi Bondyé</h6>
                                <small>3:45</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Lavi Krist</h6>
                                <small>4:12</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Lanmou ki gen pou nou</h6>
                                <small>5:03</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="audio/chants-sacres.zip" class="btn btn-primary">Télécharger la collection</a>
            </div>
        </div>
    </div>
</div>

<style>
.filter-btn.active { @apply bg-black text-white; }
.no-scrollbar::-webkit-scrollbar { display: none; }
.resource-card.hidden-item { 
    opacity: 0; 
    transform: translateY(30px); 
    pointer-events: none; 
    position: absolute; /* Pour éviter qu'il prenne de la place */
}
#externalModal.show { opacity: 1; visibility: visible; }

/* Styles pour les modals */
.modal-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.modal-title {
    font-weight: 600;
    color: #212529;
}

.modal-footer {
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
}

/* Styles pour le lecteur audio */
.audio-player {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Styles pour le carrousel */
.carousel-item img {
    object-fit: cover;
    height: 500px;
}

.carousel-caption {
    background-color: rgba(0,0,0,0.6);
    border-radius: 8px;
    padding: 15px;
}
</style>

<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.9.179/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.9.179/pdf.worker.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.resource-card');
    const searchInput = document.getElementById('searchInput');
    const grid = document.getElementById('resourceGrid');
    const noResultsMsg = document.getElementById('noResults');

    // Assurer que la grille a une position relative pour les éléments absolus
    grid.style.position = 'relative';

    function filterContent() {
        const activeTab = document.querySelector('.filter-btn.active').getAttribute('data-tab');
        const searchTerm = searchInput.value.toLowerCase();
        let visibleCount = 0;

        cards.forEach(card => {
            const type = card.getAttribute('data-type');
            const title = card.getAttribute('data-title');
            const matchesTab = activeTab === 'all' || type === activeTab;
            const matchesSearch = title.includes(searchTerm);

            if (matchesTab && matchesSearch) {
                card.classList.remove('hidden-item');
                // S'assurer que la carte est en position static pour la grille
                card.style.position = 'static';
                visibleCount++;
            } else {
                card.classList.add('hidden-item');
            }
        });

        noResultsMsg.classList.toggle('hidden', visibleCount > 0);
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            filterContent();
        });
    });

    searchInput.addEventListener('input', filterContent);

    // Gestion des clics sur les liens des ressources
    document.querySelectorAll('.resource-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const isExternal = this.getAttribute('data-external') === 'true';
            const modalId = this.getAttribute('data-modal');
            const type = this.getAttribute('data-type');
            
            if (isExternal) {
                // Pour les liens externes, on utilise le modal existant
                externalUrl = this.href;
                document.getElementById('externalModal').classList.add('show');
            } else {
                // Pour les autres types, on ouvre le modal approprié
                if (modalId) {
                    const modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.show();
                    
                    // // Cas spécial pour le PDF avec aperçu
                    // if (type === 'pdf' && modalId === 'pdfModal5') {
                    //     // Gérer le bouton d'affichage complet
                    //     document.getElementById('togglePreview').addEventListener('click', function() {
                    //         const preview = document.getElementById('pdfPreview');
                    //         const full = document.getElementById('pdfFull');
                            
                    //         if (preview.classList.contains('d-none')) {
                    //             preview.classList.remove('d-none');
                    //             full.classList.add('d-none');
                    //             this.textContent = 'Afficher le document complet';
                    //         } else {
                    //             preview.classList.add('d-none');
                    //             full.classList.remove('d-none');
                    //             this.textContent = 'Afficher l\'aperçu';
                    //         }
                    //     });
                    // }
                }
            }
        });
    });

    // Gestion du modal externe
    document.getElementById('confirmExternal').addEventListener('click', () => {
        window.open(externalUrl, '_blank');ri
        closeExternalModal();
    });
});

let externalUrl = '';

function closeExternalModal() {
    document.getElementById('externalModal').classList.remove('show');
}
</script>

{{-- Modal pour les liens externes --}}
<div id="externalModal" class="fixed inset-0 z-[100] opacity-0 invisible transition-all duration-500">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeExternalModal()"></div>
    <div class="relative min-h-screen flex items-center justify-center p-6">
        <div class="bg-white p-12 max-w-sm w-full text-center space-y-8" style="border-radius: 40px;">
            <div class="text-red-900"><i class="fas fa-external-link-alt text-3xl"></i></div>
            <h3 class="text-xl font-bold uppercase tracking-tighter">Vers le média externe</h3>
            <p class="text-sm text-gray-500 font-light italic leading-relaxed">Vous allez être redirigé vers une plateforme partenaire. Souhaitez-vous continuer l'immersion ?</p>
            <div class="flex flex-col gap-3">
                <button id="confirmExternal" class="w-full py-4 bg-black text-white text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-red-900 transition-all">Continuer</button>
                <button onclick="closeExternalModal()" class="w-full py-4 text-[10px] font-black uppercase tracking-widest text-gray-400">Retour</button>
            </div>
        </div>
    </div>
</div>

@endsection