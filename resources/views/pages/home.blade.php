@extends('layouts.app')

@section('content')
<header class="py-4 px-6 text-center">
    <div class="max-w-4xl mx-auto">
        {{-- Ajout du Logo --}}
        <div class="mb-1">
            <img src="{{ asset('images/logo.png') }}" alt="Logo APACC-M" class="h-32 mx-auto">
        </div>

        <span class="inline-block px-4 py-1.5 bg-red-50 text-red-600 rounded-full text-xs font-bold mb-6 float-anim border border-red-100">
            ✨ Association pour la Promotion de l'Art et la Culture Chrétienne
        </span>
        
        <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
            APACC-M : <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-amber-500">Valoriser notre patrimoine</span>
        </h1>
        
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">Promouvoir et valoriser l'art et la culture chrétienne martiniquaise à travers sa culture créole.</p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('about') }}" class="px-8 py-3.5 bg-slate-900 text-white rounded-2xl font-bold shadow-lg hover:bg-slate-800 transition-all">Découvrir l'association</a>
            <a href="{{ route('events') }}" class="px-8 py-3.5 bg-red-600 text-white rounded-2xl font-bold shadow-lg hover:bg-red-700 transition-all">Nos événements</a>
        </div>
    </div>
</header>

<section class="py-16 px-6 max-w-6xl mx-auto border-t border-slate-100">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Actualités</h2>
            <p class="text-slate-500 border-l-4 border-amber-500 pl-3">Les derniers moments forts de l'association</p>
        </div>
    </div>

    @php
        $articles = [
            [
                'slug' => 'sacre-en-couleurs',
                'title' => 'Exposition : "Sacré en couleurs"',
                'date' => '10 Fév. 2026',
                'excerpt' => 'Découvrez les œuvres d\'artistes martiniquais explorant le sacré à travers le prisme créole.',
                'image' => 'expo'
            ],
            [
                'slug' => 'patrimoine-religieux-2026',
                'title' => 'Sauvegarde du patrimoine 2026',
                'date' => '05 Fév. 2026',
                'excerpt' => 'Lancement de notre nouvelle campagne d\'inventaire des calvaires de l\'île.',
                'image' => 'church'
            ],
            [
                'slug' => 'nouveaux-artistes-reseau',
                'title' => 'Le réseau s\'agrandit',
                'date' => '28 Janv. 2026',
                'excerpt' => 'Trois nouveaux sculpteurs nous rejoignent pour promouvoir l\'artisanat chrétien.',
                'image' => 'artist'
            ]
        ];
    @endphp

    <div class="grid md:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <article class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl hover:border-amber-200 transition-all duration-500 flex flex-col group">
            <div class="relative overflow-hidden h-52">
                <img src="https://picsum.photos/seed/{{ $article['image'] }}/600/400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black uppercase text-red-600 border border-red-100">
                    {{ $article['date'] }}
                </div>
            </div>
            <div class="p-8 flex-grow">
                <h3 class="font-bold text-xl mb-3 text-slate-900 group-hover:text-red-600 transition-colors">{{ $article['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ $article['excerpt'] }}</p>
            </div>
            <div class="px-8 pb-8">
                <a href="{{ route('news.show', $article['slug']) }}" class="inline-flex items-center text-sm font-black uppercase tracking-widest text-red-600 hover:text-amber-600 transition-colors">
                    Lire la suite <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endsection