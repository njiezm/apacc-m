@extends('layouts.app')

@section('title', 'Actualité - APACC-M')

@section('content')

<article class="pt-32 pb-32 px-6">
<div class="max-w-4xl mx-auto">
{{-- Navigation Retour --}}
<nav class="mb-16">
<a href="{{ route('home') }}" class="group inline-flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.4em] text-gray-400 hover:text-red-900 transition-colors">
<span class="w-8 h-[1px] bg-gray-200 group-hover:w-12 group-hover:bg-red-900 transition-all"></span>
Retour aux archives
</a>
</nav>

    {{-- En-tête de l'article --}}
    <header class="mb-20">
        @php
            $titles = [
                'sacre-en-couleurs' => 'Exposition : "Sacré en couleurs"',
                'patrimoine-religieux-2026' => 'Sauvegarde du patrimoine 2026',
                'nouveaux-artistes-reseau' => "Le réseau d'artistes s'agrandit"
            ];
            $currentTitle = $titles[$slug] ?? "Actualité APACC-M";
        @endphp
        
        <div class="flex items-center gap-4 mb-8">
            <span class="font-accent text-[9px] uppercase tracking-[0.5em] text-red-800">Communiqué Officiel</span>
            <span class="text-gray-300 text-[10px]">•</span>
            <time class="text-[9px] uppercase tracking-[0.3em] text-gray-400">10 Février 2026</time>
        </div>

        <h1 id="article-title" class="font-display text-5xl md:text-7xl font-extrabold text-black leading-[0.9] mb-12 tracking-tighter uppercase">
            {{ $currentTitle }}
        </h1>

        <div class="flex items-center gap-6 py-8 border-y border-gray-100">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center text-red-900 text-[10px] font-bold">A</div>
                <span class="text-[10px] font-black uppercase tracking-widest text-gray-900 italic">Par APACC-M</span>
            </div>
        </div>
    </header>

    {{-- Image de l'article avec arche --}}
    <div class="relative mb-24 overflow-hidden" style="border-radius: 300px 300px 0 0;">
        <img src="https://picsum.photos/seed/{{ $slug }}/1200/1500" 
             class="w-full aspect-[3/4] md:aspect-video object-cover grayscale hover:grayscale-0 transition-all duration-[3s] ease-out scale-110 hover:scale-100" 
             alt="Image de l'article">
        <div class="absolute inset-0 bg-red-900/5 pointer-events-none"></div>
    </div>

    {{-- Corps de l'article --}}
    <div class="max-w-2xl mx-auto">
        <div class="prose-custom">
            <p class="text-2xl font-light text-black leading-relaxed mb-12 italic serif">
                <span class="float-left text-8xl font-extrabold text-red-900 leading-[0.7] mr-4 mt-2">L'</span>
                Association pour la Promotion de l'Art et la Culture Chrétienne est fière de partager cette nouvelle étape avec vous, au cœur de notre mission culturelle.
            </p>
            
            <div class="space-y-12 text-gray-500 font-light leading-[1.8] text-lg italic">
                <p>
                    C'est au cœur de Fort-de-France que cet événement prend tout son sens. À travers une sélection minutieuse d'œuvres, nous cherchons à tisser un lien indéfectible entre héritage spirituel et identité créole.
                </p>

                <blockquote class="relative py-16 px-12 my-16 bg-gray-50/50 rounded-[3rem] text-center">
                    <p class="relative z-10 font-display text-2xl text-red-950 leading-tight uppercase tracking-tighter font-bold">
                        "Notre mission est de rendre visible l'invisible, en mettant en lumière le talent de ceux qui s'inspirent de la foi."
                    </p>
                    <footer class="mt-8 text-[9px] font-black uppercase tracking-[0.4em] text-red-800">— Direction APACC-M</footer>
                </blockquote>

                <p>
                    Nous invitons tous nos membres à se joindre à nous. Pour plus d'informations, contactez-nous via notre formulaire ou suivez nos réseaux sociaux pour ne rien manquer des coulisses de ce projet ambitieux.
                </p>
            </div>
        </div>

        {{-- Actions de partage --}}
        <div class="mt-24 pt-16 border-t border-gray-100">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <button id="share-button" class="group flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.3em] text-black">
                    <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                        <i class="fas fa-share-alt"></i>
                    </span>
                    Partager ce récit
                </button>

                <a href="{{ route('contact') }}" class="px-12 py-5 bg-red-900 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-black transition-colors shadow-xl shadow-red-900/10">
                    Nous contacter
                </a>
            </div>
            
            <p id="share-fallback" class="text-center text-[9px] mt-8 text-red-800 font-black uppercase tracking-widest hidden animate-pulse">
                Le lien a été copié dans votre presse-papier
            </p>
        </div>
    </div>
</div>


</article>

<script>
document.getElementById('share-button').addEventListener('click', async () => {
const shareData = {
title: document.getElementById('article-title').innerText,
text: 'Découvrez cet article de l&#39;APACC-Martinique :',
url: window.location.href
};

    try {
        if (navigator.share) {
            await navigator.share(shareData);
        } else {
            await navigator.clipboard.writeText(window.location.href);
            const fallbackMsg = document.getElementById(&#39;share-fallback&#39;);
            fallbackMsg.classList.remove(&#39;hidden&#39;);
            setTimeout(() =&gt; fallbackMsg.classList.add(&#39;hidden&#39;), 3000);
        }
    } catch (err) {
        console.log(&#39;Erreur lors du partage :&#39;, err);
    }
});


</script>

<style>
@import url('https://www.google.com/search?q=https://fonts.googleapis.com/css2%3Ffamily%3DCinzel:wght%40400%3B700%26display%3Dswap');
.serif { font-family: 'Cinzel', serif; }
</style>

@endsection