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
                <div class="flex items-center gap-6 mb-8 mt-5">
                    <span class="text-[10px] font-black text-red-900">01</span>
                    <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Éditeur du site</h2>
                </div>
                
                <div class="pl-12 space-y-8">
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Le site <span class="text-black font-medium">apacc-martinique.fr</span> est l'espace numérique officiel de l'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M).
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
                        Cette œuvre numérique est hébergée par 
                        <span class="text-black font-medium">O2switch</span>, 
                        dont la diligence technique est assurée au siège situé au 
                        <span class="text-black font-medium">222-224 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, France</span>.
                    </p>
                </div>
            </article>

            {{-- 3. Conception & Développement (NOUVELLE SECTION) --}}
            <article class="group">
                <div class="flex items-center gap-6 mb-8">
                    <span class="text-[10px] font-black text-red-900">03</span>
                    <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Conception & Développement</h2>
                </div>
                
                <div class="pl-12 space-y-8">
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        La conception, le développement technique et le design de cette plateforme numérique ont été réalisés avec passion par :
                    </p>
                    
                    {{-- Carte de crédit avec le "logo" et les infos --}}
                    <div class="bg-gray-50/50 p-10 rounded-[2rem] border border-gray-50 text-center">
                        <a href="https://www.njiezm.fr" target="_blank" rel="noopener noreferrer" class="inline-block group transition-transform duration-300 ease-in-out hover:scale-105">
                            <div class="font-display text-5xl font-extrabold">
                                <span class="text-blue-600" style="color:#003366">NJIEZM</span><span class="text-yellow-500">.FR</span>
                            </div>
                            <p class="text-sm text-gray-600 mt-4">
                                Par N'jie ZAMON<br>
                                <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Entreprise Individuelle (EI)</span>
                            </p>
                        </a>
                    </div>
                    <p class="text-[10px] text-gray-400 font-light italic uppercase tracking-widest text-center">Pour toute demande de projet web : <a href="https://www.njiezm.fr" class="text-red-800 hover:underline">www.njiezm.fr</a></p>
                </div>
            </article>

            {{-- 4. Propriété Intellectuelle (NUMÉRO MIS À JOUR) --}}
            <article class="group">
                <div class="flex items-center gap-6 mb-8">
                    <span class="text-[10px] font-black text-red-900">04</span>
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


@endsection