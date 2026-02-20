@extends('layouts.app')

@section('title', 'Patrimoine Chrétien - APACC-M')

@section('content')
{{-- Hero Section Patrimoine --}}

<header class="pt-32 pb-24 px-6 bg-white overflow-hidden">
<div class="max-w-6xl mx-auto text-center">
<span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8 block">Histoire & Spiritualité</span>

    <h1 class="font-display text-5xl md:text-8xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
        Patrimoine <br>
        <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Chrétien</span>
    </h1>
    
    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed italic">
        "Découvrez les édifices et les lieux de mémoire qui façonnent l'âme spirituelle de la Martinique."
    </p>
</div>


</header>

<section class="pb-32 px-6 mt-5">
<div class="max-w-7xl mx-auto">
<div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">

        {{-- Section Églises - Colonne Gauche --}}
        <div class="space-y-16">
            <div class="group">
                
                
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-3xl font-bold tracking-tighter uppercase">Églises Historiques</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Témoins de l'architecture coloniale et de la ferveur populaire, ces édifices sont le cœur battant de notre héritage.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors">Cathédrale Saint-Louis</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Structure métallique iconique signée Henri Picq.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Balata</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors">Sacré-Cœur</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">L'élégance de Montmartre nichée dans la verdure tropicale.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Le Carbet</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors">Église Saint-Jacques</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Un sanctuaire historique parmi les plus anciens de l'île.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="space-y-16">
            <div class="group">
                
                
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-3xl font-bold tracking-tighter uppercase">Calvaires & Chemins</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Sentinelles silencieuses perchées sur nos mornes, ils offrent des points de recueillement face aux grands paysages.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Morne-Rouge</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors">Chemin de Croix</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Une ascension spirituelle face à la majestueuse Montagne Pelée.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Sainte-Marie</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors">Le Calvaire</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Une halte sacrée surplombant l'immensité de l'Atlantique.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</section>

{{-- Section Visites Guidées - Style Narthex Sombre --}}

<section class="py-32 bg-black text-white px-6">
<div class="max-w-5xl mx-auto">
<div class="text-center mb-20">
<h3 class="font-display text-3xl md:text-5xl font-bold mb-6 uppercase tracking-tighter">Visites <span class="italic font-light serif text-red-400" style="font-family: 'Cinzel', serif;">Guidées</span></h3>
<p class="text-gray-400 font-light italic">Participez à nos circuits exclusifs pour comprendre l'histoire cachée de ces lieux.</p>
</div>

    <div class="grid md:grid-cols-2 gap-8">
        {{-- Carte Visite 1 --}}
        <div class="p-10 border border-white/10 rounded-[2rem] hover:bg-white/5 transition-all flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-red-400 px-3 py-1 border border-red-400/30 rounded-full">Mars 2024</span>
                    <i class="fas fa-arrow-right text-xs opacity-20 group-hover:opacity-100"></i>
                </div>
                <h4 class="text-2xl font-bold uppercase tracking-tight mb-2">Circuit des Églises du Nord</h4>
                <p class="text-sm text-gray-400 font-light italic">Une journée d'exploration entre architecture et légendes.</p>
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block w-full py-4 bg-white text-black text-center text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-red-400 transition-colors">
                    S'inscrire
                </a>
            </div>
        </div>

        {{-- Carte Visite 2 --}}
        <div class="p-10 border border-white/10 rounded-[2rem] hover:bg-white/5 transition-all flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-red-400 px-3 py-1 border border-red-400/30 rounded-full">Avril 2024</span>
                </div>
                <h4 class="text-2xl font-bold uppercase tracking-tight mb-2">Balade Spirituelle au Diamant</h4>
                <p class="text-sm text-gray-400 font-light italic">Méditation et découverte du patrimoine côtier.</p>
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block w-full py-4 border border-white/20 text-white text-center text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-black transition-colors">
                    S'inscrire
                </a>
            </div>
        </div>
    </div>
</div>


</section>
@endsection