@extends('layouts.app')

@section('title', 'Boutique - APACC-M')

@section('content')

@php
/*
|--------------------------------------------------------------------------
| DONNÉES DE LA BOUTIQUE
|--------------------------------------------------------------------------
| Pour ajouter un nouvel article, copiez-collez un des blocs ci-dessous
| et modifiez les valeurs. La page se mettra à jour automatiquement.
|
| 'id'            : Identifiant unique (important pour les liens/formulaires)
| 'category'      : 'publication' ou 'object' (pour le classement en sections)
| 'type'          : Type spécifique (ex: 'livre', 'revue', 'vetement')...
| 'title'         : Nom du produit
| 'subtitle'      : Sous-titre / étiquette (ex: "Ouvrage de collection")
| 'desc'          : Description courte
| 'price'         : Prix affiché (ou "Sur demande")
| 'image'         : Seed pour l'image placeholder de secours (ex: 'livre-art-creole')
| 'srcimage'      : (Optionnel) Chemin vers l'image dans /public/images (ex: 'images/mon-produit.jpg')
|                   Si non défini, une image placeholder sera utilisée.
| 'url'           : Lien d'achat ou de contact
| 'is_external'   : true pour ouvrir dans un nouvel onglet, false sinon
|
| --- CHAMPS OPTIONNELS ---
| 'issues'        : Tableau pour les numéros de revue
| 'options'       : Tableau pour les sélecteurs (ex: tailles)
*/
 $shopItems = [
    // PUBLICATIONS
    /*[
        'id' => 'livre-art-creole',
        'category' => 'publication',
        'type' => 'livre',
        'title' => 'Livre "Art chrétien créole"',
        'subtitle' => 'Ouvrage de collection',
        'desc' => 'Un voyage photographique et historique au cœur du patrimoine sacré.',
        'price' => '35€',
        'image' => 'book-art-creole', // Fallback seed
        'srcimage' => 'images/livre-art-creole.jpg', // Image locale dans /public/images/
        'url' => 'https://www.helloasso.com/associations/apacc-m/boutiques/livre',
        'is_external' => true,
    ],*/
    [
        'id' => 'revue-transandans',
        'category' => 'publication',
        'type' => 'revue',
        'title' => 'Revue Transandans',
        'subtitle' => 'Cahiers de culture',
        'desc' => 'Réflexions sur l\'identité créole et la spiritualité.',
        'image' => 'transandas5', // Fallback seed
        'srcimage' => 'images/transandas5.jpeg', // Image locale
        'issues' => [
            ['num' => 1, 'price_paper' => '4,50€', 'price_digital' => '3,80€'],
            ['num' => 2, 'price_paper' => '4,50€', 'price_digital' => '3,80€'],
            ['num' => 3, 'price_paper' => '4,50€', 'price_digital' => '3,80€'],
            ['num' => 4, 'price_paper' => '4,50€', 'price_digital' => '3,80€'],
            ['num' => 5, 'price_paper' => '4,50€', 'price_digital' => '3,80€'],
        ],
        'url' => 'https://www.helloasso.com/associations/apacc-m/boutiques/revue-transandans',
        'is_external' => true,
    ],
    // CRÉATIONS & OBJETS
    [
        'id' => 'tee-shirt-festival',
        'category' => 'object',
        'type' => 'vetement',
        'title' => 'Tee-shirt Festival',
        'subtitle' => 'Édition limitée',
        'desc' => 'Portez les couleurs de notre événement annuel.',
        'price' => '15€',
        'image' => 'tee-shirt-festival', // Fallback seed
        'srcimage' => 'images/tshirt.jpg', // Exemple d'image locale
        'options' => ['Tailles' => ['S', 'M', 'L', 'XL']],
        'url' => 'mailto:commande@apacc-m.fr?subject=Commande Tee-shirt',
        'is_external' => false,
    ],
    [
        'id' => 'carterie',
        'category' => 'object',
        'type' => 'papeterie',
        'title' => 'Carte Postale',
        'subtitle' => 'Carterie du patrimoine',
        'desc' => 'Une sélection de nos plus belles photographies.',
        'price' => '5€',
        'image' => 'carte-postale-patrimoine', // Fallback seed
        'srcimage' => 'images/cartes.jpg', // Image locale
        'url' => 'https://www.helloasso.com/associations/apacc-m/boutiques/carterie',
        'is_external' => true,
    ],
    [
        'id' => 'mug-personnalise',
        'category' => 'object',
        'type' => 'objet',
        'title' => 'Mug APACC-M',
        'subtitle' => 'Objet promotionnel',
        'desc' => 'Le mug de l\'association, pour vos moments de lecture.',
        'price' => 'Sur demande',
        'image' => 'mug-apacc-m', // Fallback seed
         'srcimage' => 'images/mug.jpg', // Exemple d'image locale
        'url' => route('contact'),
        'is_external' => false,
    ],
];
@endphp

<section class="py-16 px-6 max-w-6xl mx-auto">
    {{-- En-tête de section --}}
    <header class="mb-16 text-center">
        <div class="flex flex-col items-center mb-8">
            <span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-800 mb-4">Soutien & Patrimoine</span>
            <div class="h-[1px] w-12 bg-red-200 mb-8"></div>
            <h2 class="font-display text-3xl md:text-4xl font-extrabold text-black mb-6 leading-[1.1] tracking-tighter uppercase">
                La <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Boutique</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-xl mx-auto font-light leading-relaxed italic">
                "Soutenez nos actions en acquérant nos créations."
            </p>
        </div>
    </header>

    {{-- SECTION 1: PUBLICATIONS --}}
    <div class="mb-20">
        <h3 class="font-display text-xl font-bold mb-8 text-center uppercase tracking-tighter">Publications</h3>
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 justify-items-center">
            @foreach($shopItems as $item)
                @if($item['category'] === 'publication')
                    @if($item['type'] === 'revue')
                        {{-- CARTE SPÉCIALE POUR LA REVUE --}}
                        <div class="group flex flex-col bg-white rounded-lg shadow-sm border border-neutral-100 overflow-hidden max-w-sm w-full">
                            <div class="relative overflow-hidden" style="border-radius: 16px 16px 0 0;">
                                
                                <img src="{{isset($item['srcimage']) && $item['srcimage']
    ? asset($item['srcimage'])
    : "https://picsum.photos/seed/{$item['image']}/600/750" }}" 
                                     alt="{{ $item['title'] }}" 
                                     class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-all duration-700">
                            </div>
                            <div class="p-5 space-y-3 text-center">
                                <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">{{ $item['subtitle'] }}</span>
                                <h3 class="text-xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors">{{ $item['title'] }}</h3>
                                <p class="text-xs text-gray-500 font-light leading-relaxed italic">{{ $item['desc'] }}</p>
                                
                                <div class="pt-3 space-y-2 max-h-48 overflow-y-auto no-scrollbar">
                                    @foreach($item['issues'] as $issue)
                                    <div class="flex items-center justify-between p-2 border border-gray-100 rounded text-xs">
                                        <span class="font-bold uppercase tracking-wider">N°{{ $issue['num'] }}</span>
                                        <div class="flex gap-3">
                                            <a href="{{ $item['url'] }}?num={{ $issue['num'] }}&format=paper" class="underline hover:no-underline">Papier {{ $issue['price_paper'] }}</a>
                                            <a href="{{ $item['url'] }}?num={{ $issue['num'] }}&format=digital" class="underline hover:no-underline">Num. {{ $issue['price_digital'] }}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- CARTE STANDARD POUR LIVRE --}}
                        <div class="group flex flex-col bg-white rounded-lg shadow-sm border border-neutral-100 overflow-hidden max-w-sm w-full">
                            <div class="relative overflow-hidden" style="border-radius: 16px 16px 0 0;">
                                <img src="{{isset($item['srcimage']) && $item['srcimage']
    ? asset($item['srcimage'])
    : "https://picsum.photos/seed/{$item['image']}/600/750" }}" 
                                     alt="{{ $item['title'] }}" 
                                     class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-all duration-700">
                                <div class="absolute bottom-4 right-4 bg-black text-white px-4 py-2 rounded-full shadow-lg">
                                    <span class="text-sm font-light serif italic" style="font-family: 'Cinzel', serif;">{{ $item['price'] }}</span>
                                </div>
                            </div>
                            <div class="p-5 space-y-3 text-center">
                                <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">{{ $item['subtitle'] }}</span>
                                <h3 class="text-xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors">{{ $item['title'] }}</h3>
                                <p class="text-xs text-gray-500 font-light leading-relaxed italic">{{ $item['desc'] }}</p>
                                <div class="pt-4">
                                    <a href="{{ $item['url'] }}" 
                                       @if($item['is_external']) target="_blank" @endif
                                       class="w-full py-3 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all">
                                        Acquérir
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>

    {{-- SECTION 2: CRÉATIONS & OBJETS --}}
    <div class="mb-20">
        <h3 class="font-display text-xl font-bold mb-8 text-center uppercase tracking-tighter">Créations & Objets</h3>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            @foreach($shopItems as $item)
                @if($item['category'] === 'object')
                    <div class="group flex flex-col bg-white rounded-lg shadow-sm border border-neutral-100 overflow-hidden">
                        <div class="relative overflow-hidden" style="border-radius: 16px 16px 0 0;">
                            <img src="{{isset($item['srcimage']) && $item['srcimage']
    ? asset($item['srcimage'])
    : "https://picsum.photos/seed/{$item['image']}/600/750" }}" 
                                 alt="{{ $item['title'] }}" 
                                 class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-all duration-700">
                            @if($item['price'] !== 'Sur demande')
                                <div class="absolute bottom-4 right-4 bg-black text-white px-4 py-2 rounded-full shadow-lg">
                                    <span class="text-sm font-light serif italic" style="font-family: 'Cinzel', serif;">{{ $item['price'] }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-5 space-y-3 text-center flex-grow flex flex-col">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">{{ $item['subtitle'] }}</span>
                            <h3 class="text-xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors">{{ $item['title'] }}</h3>
                            <p class="text-xs text-gray-500 font-light leading-relaxed italic">{{ $item['desc'] }}</p>
                            
                            @if(isset($item['options']))
                                <div class="pt-2">
                                    <select class="w-full border border-gray-200 rounded-full px-4 py-2 text-xs font-light focus:outline-none focus:border-red-900">
                                        @foreach($item['options'] as $label => $values)
                                            <option disabled selected>{{ $label }}</option>
                                            @foreach($values as $value)
                                                <option value="{{ $value }}">{{ $value }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="pt-4 mt-auto">
                                <a href="{{ $item['url'] }}" 
                                   @if($item['is_external']) target="_blank" @endif
                                   class="w-full block py-3 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all">
                                    {{ $item['price'] === 'Sur demande' ? 'Nous contacter' : 'Commander' }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- SECTION 3: SOUTIEN & ADHÉSION --}}
    <div class="grid md:grid-cols-2 gap-8 justify-items-center">
        <div class="group flex flex-col bg-white rounded-lg shadow-sm border border-neutral-100 overflow-hidden max-w-sm w-full">
            <div class="relative overflow-hidden" style="border-radius: 16px 16px 0 0;">
                <img src="{{ asset('images/logo.png') }}" 
                     class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-all duration-700">
                <div class="absolute inset-0 bg-red-900/10 group-hover:bg-transparent transition-colors"></div>
            </div>
            <div class="p-5 space-y-3 text-center">
                <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">Engagement</span>
                <h3 class="text-xl font-bold tracking-tighter uppercase">Adhésion Annuelle</h3>
                <p class="text-xs text-gray-500 font-light leading-relaxed italic">
                    Rejoignez notre mission et accédez à nos événements.
                </p>
                <div class="pt-4">
                    <a href="{{ route('contact') }}" 
                       class="w-full block py-3 border border-black/10 text-black text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-black hover:text-white transition-all">
                        Devenir Membre
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 flex flex-col justify-center text-center max-w-sm w-full">
            <h3 class="font-display text-2xl font-bold mb-6 uppercase tracking-tighter">Soutien Libre</h3>
            <p class="text-gray-500 font-light italic mb-8 leading-relaxed text-sm">
                "Chaque contribution aide directement à la préservation des œuvres."
            </p>
            <a href="https://www.helloasso.com/associations/apacc-m/formulaires/1" target="_blank" class="inline-flex items-center justify-center gap-4 text-[10px] font-black uppercase tracking-[0.4em] text-red-900 group">
                Faire un don
                <span class="w-10 h-[1px] bg-red-900 group-hover:w-16 transition-all"></span>
            </a>
        </div>
    </div>
</section>

@endsection