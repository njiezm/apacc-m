@extends('layouts.app')

@section('title', 'Mentions Légales - APACC-M')

@section('content')
{{-- Hero Section Institutionnelle --}}

<header class="pt-32 pb-20 px-6 bg-white overflow-hidden">
<div class="max-w-4xl mx-auto text-center">
<span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8 block">Cadre Institutionnel</span>

    <h1 class="font-display text-4xl md:text-6xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
        Mentions <br>
        <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Légales</span>
    </h1>
    
    <div class="w-12 h-[1px] bg-gray-200 mx-auto"></div>
</div>


</header>

<section class="pb-32 px-6">
<div class="max-w-3xl mx-auto">
<div class="space-y-24">

        {{-- 1. Éditeur --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">01</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Éditeur du site</h2>
            </div>
            
            <div class="pl-12 space-y-8">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Le site <span class="text-black font-medium">apacc-m.fr</span> est l’espace numérique officiel de l'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M).
                </p>
                
                <div class="grid md:grid-cols-2 gap-10 bg-gray-50/50 p-10 rounded-[2rem] border border-gray-50">
                    <div>
                        <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-red-800 mb-4">Siège Social</h4>
                        <p class="text-sm text-gray-600 font-light leading-loose">
                            11 Avenue Franz Fanon<br>
                            97200 Fort de France<br>
                            Martinique
                        </p>
                    </div>
                    <div>
                        <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-red-800 mb-4">Identification</h4>
                        <p class="text-sm text-gray-600 font-light leading-loose">
                            <span class="font-medium text-black">Siret :</span> 924 433 808 00012<br>
                            <span class="font-medium text-black">RNA :</span> W9M1011611
                        </p>
                    </div>
                </div>
                <p class="text-[10px] text-gray-400 font-light italic uppercase tracking-widest">Responsable de publication : Le Président de l'association</p>
            </div>
        </article>

        {{-- 2. Hébergement --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">02</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Hébergement</h2>
            </div>
            
            <div class="pl-12">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Cette œuvre numérique est hébergée par <span class="text-black font-medium">[Nom de l'hébergeur]</span>, 
                    dont la diligence technique est assurée au siège situé à [Adresse de l'hébergeur].
                </p>
            </div>
        </article>

        {{-- 3. Propriété Intellectuelle --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">03</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Propriété Intellectuelle</h2>
            </div>
            
            <div class="pl-12 space-y-6">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    L'ensemble des contenus — textes, graphismes, logos, sons, photographies et compositions vidéographiques — présents sur ce site est la propriété exclusive de l'APACC-M ou fait l'objet d'une autorisation spécifique d'usage.
                </p>
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Toute reproduction, même partielle, est soumise à la courtoisie d'une demande écrite préalable. Le respect de l'œuvre et du droit d'auteur est au cœur de notre démarche culturelle.
                </p>
            </div>
        </article>

    </div>
</div>


</section>

{{-- Footer décoratif discret --}}

<footer class="py-20 border-t border-gray-50 text-center">
<div class="max-w-4xl mx-auto px-6">
<div class="font-display text-[8px] font-black uppercase tracking-[0.8em] text-gray-200">
APACC-M &bull; Archives &bull; 2024
</div>
</div>
</footer>
@endsection