@extends('layouts.app')

@section('title', 'Actualité - APACC-M')

@section('content')
<article class="py-24 px-6 max-w-4xl mx-auto">
    {{-- Bouton retour stylisé --}}
    <a href="{{ route('home') }}" class="inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 hover:text-red-600 mb-12 transition-all group">
        <i class="fas fa-chevron-left mr-3 group-hover:-translate-x-1 transition-transform"></i> Retour aux actualités
    </a>

    {{-- En-tête de l'article --}}
    <header class="mb-12">
        @php
            $titles = [
                'sacre-en-couleurs' => 'Exposition : "Sacré en couleurs"',
                'patrimoine-religieux-2026' => 'Sauvegarde du patrimoine 2026',
                'nouveaux-artistes-reseau' => "Le réseau d'artistes s'agrandit"
            ];
            $currentTitle = $titles[$slug] ?? "Actualité APACC-M";
        @endphp
        
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-[1px] bg-red-600"></span>
            <span class="text-red-600 font-black text-xs uppercase tracking-[0.2em]">Communiqué Officiel</span>
        </div>

        <h1 id="article-title" class="text-4xl md:text-6xl font-black text-slate-900 leading-[1.1] mb-8 tracking-tighter">
            {{ $currentTitle }}
        </h1>

        <div class="flex items-center gap-6 text-slate-400 text-xs font-bold uppercase tracking-widest border-y border-slate-100 py-6">
            <div class="flex items-center gap-2">
                <i class="far fa-calendar text-red-600"></i>
                <time>10 Février 2026</time>
            </div>
            <div class="flex items-center gap-2">
                <i class="far fa-user text-red-600"></i>
                <span>Par APACC-M</span>
            </div>
        </div>
    </header>

    {{-- Image principale avec effet de cadre --}}
    <div class="relative group mb-16">
        <div class="absolute -inset-4 bg-red-600/5 rounded-[3.5rem] -rotate-1 group-hover:rotate-0 transition-transform duration-700"></div>
        <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border border-white">
            <img src="https://picsum.photos/seed/{{ $slug }}/1200/700" class="w-full h-auto scale-105 group-hover:scale-100 transition-transform duration-[2s]" alt="Image de l'article">
        </div>
    </div>

    {{-- Corps de l'article --}}
    <div class="prose prose-slate max-w-none">
        <p class="text-2xl font-bold text-slate-900 leading-relaxed mb-8 first-letter:text-6xl first-letter:font-black first-letter:text-red-600 first-letter:mr-3 first-letter:float-left">
            L'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M) est fière de partager cette nouvelle étape avec vous.
        </p>
        
        <div class="text-lg text-slate-600 leading-[1.8] space-y-8">
            <p>
                C'est au cœur de Fort-de-France que cet événement prend tout son sens. À travers une sélection minutieuse d'œuvres, nous cherchons à tisser un lien indéfectible entre héritage spirituel et identité créole.
            </p>

            <blockquote class="relative border-none p-10 my-12 bg-slate-50 rounded-[2.5rem] overflow-hidden">
                <i class="fas fa-quote-left absolute top-6 left-6 text-4xl text-red-600/10"></i>
                <p class="relative z-10 italic font-bold text-slate-800 text-xl leading-relaxed">
                    "Notre mission est de rendre visible l'invisible, en mettant en lumière le talent de ceux qui s'inspirent de la foi."
                </p>
                <cite class="block mt-4 text-xs font-black uppercase tracking-widest text-red-600">— Direction APACC-M</cite>
            </blockquote>

            <p>
                Nous invitons tous nos membres à se joindre à nous. Pour plus d'informations, contactez-nous via notre formulaire ou suivez nos réseaux sociaux pour ne rien manquer des coulisses de ce projet.
            </p>
        </div>
    </div>

    {{-- CTA Final --}}
    <div class="mt-24 relative">
        <div class="absolute inset-0 bg-red-600 rounded-[3.5rem] rotate-1"></div>
        <div class="relative p-12 bg-slate-900 rounded-[3rem] text-center shadow-2xl">
            <h3 class="text-3xl font-black text-white mb-4 tracking-tight uppercase">Soutenez ce projet</h3>
            <p class="text-slate-400 mb-10 max-w-md mx-auto italic text-lg">"Le patrimoine ne vit que si nous le partageons ensemble."</p>
            
            <div class="flex flex-wrap justify-center gap-6">
                <button id="share-button" class="group inline-flex items-center px-10 py-5 bg-red-600 text-white rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-white hover:text-slate-900 transition-all shadow-xl shadow-red-600/20">
                    <i class="fas fa-share-alt mr-3 group-hover:rotate-12 transition-transform"></i> Partager l'article
                </button>

                <a href="{{ route('contact') }}" class="inline-flex items-center px-10 py-5 bg-white/10 text-white border border-white/20 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-white hover:text-slate-900 transition-all">
                    Nous contacter
                </a>
            </div>
            
            <p id="share-fallback" class="text-amber-400 text-[10px] mt-6 font-black uppercase tracking-[0.2em] hidden animate-bounce">
                <i class="fas fa-link mr-2"></i> Lien copié avec succès !
            </p>
        </div>
    </div>
</article>

<script>
    document.getElementById('share-button').addEventListener('click', async () => {
        const shareData = {
            title: document.getElementById('article-title').innerText,
            text: 'Découvrez cet article de l\'APACC-Martinique :',
            url: window.location.href
        };

        try {
            if (navigator.share) {
                await navigator.share(shareData);
            } else {
                await navigator.clipboard.writeText(window.location.href);
                const fallbackMsg = document.getElementById('share-fallback');
                fallbackMsg.classList.remove('hidden');
                setTimeout(() => fallbackMsg.classList.add('hidden'), 3000);
            }
        } catch (err) {
            console.log('Erreur lors du partage :', err);
        }
    });
</script>
@endsection