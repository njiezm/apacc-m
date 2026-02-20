@extends('layouts.app')

@section('title', 'Boutique - APACC-M')

@section('content')

<section class="py-24 px-6 max-w-7xl mx-auto">
{{-- En-tête de section --}}
<header class="mb-24 text-center">
<div class="flex flex-col items-center mb-10">
<span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-800 mb-6">Soutien & Patrimoine</span>
<div class="h-[1px] w-12 bg-red-200 mb-10"></div>

        <h2 class="font-display text-4xl md:text-6xl font-extrabold text-black mb-10 leading-[1.1] tracking-tighter uppercase">
            La <br>
            <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Boutique</span>
        </h2>
        
        <p class="text-xl text-gray-400 max-w-xl mx-auto font-light leading-relaxed italic">
            "Soutenez nos actions culturelles en acquérant nos ouvrages et créations originales."
        </p>
    </div>
</header>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-16 lg:gap-24">
    {{-- Produit 1 : Livre --}}
    <div class="group flex flex-col">
        {{-- Présentation en Arche --}}
        <div class="relative mb-10 overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
            <img src="https://picsum.photos/seed/book/800/1000" 
                 alt="Livre Art chrétien créole" 
                 class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
            
            {{-- Badge Prix --}}
            <div class="absolute bottom-8 right-8 bg-black text-white px-6 py-3 rounded-full shadow-2xl">
                <span class="text-lg font-light serif italic" style="font-family: 'Cinzel', serif;">35€</span>
            </div>
        </div>
        
        <div class="px-4 space-y-4 text-center">
            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">Ouvrage de collection</span>
            
            <h3 class="text-2xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors">
                Livre "Art chrétien créole"
            </h3>
            
            <p class="text-sm text-gray-500 font-light leading-relaxed italic px-4">
                Un voyage photographique et historique au cœur du patrimoine sacré de la Martinique.
            </p>
            
            <div class="pt-8 flex flex-col items-center gap-4">
                <a href="https://www.helloasso.com/associations/apacc-m/boutiques/livre" 
                   target="_blank" 
                   class="w-full py-5 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all shadow-xl shadow-black/10">
                    Acquérir l'ouvrage
                </a>
                <div class="flex items-center gap-2 opacity-30">
                    <i class="fas fa-lock text-[8px]"></i>
                    <span class="text-[8px] font-bold uppercase tracking-widest">Paiement sécurisé via HelloAsso</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Produit 2 : Estampe (Exemple pour montrer la grille) --}}
    <div class="group flex flex-col opacity-60 grayscale hover:opacity-100 transition-opacity">
        <div class="relative mb-10 overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
            <div class="w-full aspect-[4/5] bg-gray-50 flex items-center justify-center border border-dashed border-gray-200">
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Prochainement</span>
            </div>
        </div>
        <div class="px-4 space-y-2 text-center">
            <h3 class="text-xl font-bold tracking-tighter uppercase text-gray-300">Série d'estampes limitées</h3>
            <p class="text-[10px] text-gray-300 italic">Nouvelle collection d'art sacré en préparation.</p>
        </div>
    </div>

    {{-- Produit 3 : Adhésion --}}
    <div class="group flex flex-col">
        <div class="relative mb-10 overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
            <img src="https://picsum.photos/seed/membership/800/1000" 
                 class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
            <div class="absolute inset-0 bg-red-900/20 group-hover:bg-transparent transition-colors"></div>
        </div>
        
        <div class="px-4 space-y-4 text-center">
            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest bg-red-50 px-3 py-1 rounded">Engagement</span>
            <h3 class="text-2xl font-bold tracking-tighter uppercase">Adhésion Annuelle</h3>
            <p class="text-sm text-gray-500 font-light leading-relaxed italic">
                Rejoignez notre mission et bénéficiez d'un accès privilégié à nos événements et publications.
            </p>
            <div class="pt-8">
                <a href="{{ route('contact') }}" 
                   class="w-full block py-5 border border-black/10 text-black text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-black hover:text-white transition-all">
                    Devenir Membre
                </a>
            </div>
        </div>
    </div>
</div>


</section>

{{-- Section Don (Alternative) --}}

<section class="py-24 bg-gray-50 border-y border-gray-100">
<div class="max-w-3xl mx-auto px-6 text-center">
<h3 class="font-display text-3xl font-bold mb-8 uppercase tracking-tighter">Soutien Libre</h3>
<p class="text-gray-500 font-light italic mb-12 leading-relaxed">
"Chaque contribution aide directement à la préservation des œuvres et au soutien des artistes locaux."
</p>
<a href="#" class="inline-flex items-center gap-6 text-[11px] font-black uppercase tracking-[0.4em] text-red-900 group">
Faire un don à l'association
<span class="w-12 h-[1px] bg-red-900 group-hover:w-20 transition-all"></span>
</a>
</div>
</section>
@endsection