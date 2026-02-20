@extends('layouts.app')

@section('title', 'Contact - APACC-M')

@section('content')
{{-- Hero Section Curatoriale --}}

<header class="pt-32 pb-24 px-6 bg-white overflow-hidden">
<div class="max-w-6xl mx-auto text-center">
<span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8 block">Ouverture & Dialogue</span>

    <h1 class="font-display text-5xl md:text-8xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
        Restons en <br>
        <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Contact</span>
    </h1>
    
    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed italic">
        "Une question, un projet ou une envie de contribuer ? Notre équipe vous reçoit avec bienveillance."
    </p>
</div>


</header>

<section class="pb-32 px-6 relative z-20">
<div class="max-w-7xl mx-auto">
<div class="bg-white rounded-[4rem] shadow-2xl overflow-hidden border border-gray-50">
<div class="grid lg:grid-cols-5 gap-0">

            {{-- Colonne Infos (2/5) - Style "Sacreristie" Sombre --}}
            <div class="lg:col-span-2 bg-black p-12 md:p-16 text-white relative overflow-hidden flex flex-col justify-between">
                <div class="relative z-10">
                    <h3 class="font-display text-2xl font-bold mb-16 uppercase tracking-tight">Nos Coordonnées</h3>
                    
                    <div class="space-y-12">
                        {{-- Adresse --}}
                        <div class="flex items-start gap-8 group">
                            <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-red-400 group-hover:bg-white group-hover:text-black transition-all duration-500">
                                <i class="fas fa-map-marker-alt text-xs"></i>
                            </div>
                            <div>
                                <p class="text-red-500 text-[9px] uppercase font-black tracking-widest mb-3">Siège social</p>
                                <p class="text-lg leading-snug font-light italic text-gray-200">11 Avenue Franz Fanon,<br>97200 Fort de France</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start gap-8 group">
                            <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-red-400 group-hover:bg-white group-hover:text-black transition-all duration-500">
                                <i class="fas fa-envelope text-xs"></i>
                            </div>
                            <div>
                                <p class="text-red-500 text-[9px] uppercase font-black tracking-widest mb-3">Correspondance</p>
                                <p class="text-lg font-light italic text-gray-200">contact@apacc-m.fr</p>
                            </div>
                        </div>

                        {{-- Social --}}
                        <div class="flex items-start gap-8 group">
                            <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-red-400 group-hover:bg-white group-hover:text-black transition-all duration-500">
                                <i class="fas fa-share-alt text-xs"></i>
                            </div>
                            <div>
                                <p class="text-red-500 text-[9px] uppercase font-black tracking-widest mb-3">Réseaux Sociaux</p>
                                <div class="flex gap-6 mt-4">
                                    @foreach(['facebook-f', 'instagram', 'youtube'] as $icon)
                                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                            <i class="fab fa-{{ $icon }} text-lg"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Décoration Filigrane --}}
                <div class="mt-20 opacity-10 font-display text-8xl font-black pointer-events-none select-none">
                    APACC
                </div>
            </div>

            {{-- Colonne Formulaire (3/5) --}}
            <div class="lg:col-span-3 p-12 md:p-20 bg-white">
                <form action="#" method="POST" class="space-y-12">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="relative group">
                            <label class="text-[9px] font-black text-black uppercase tracking-[0.3em] mb-4 block">Votre Nom</label>
                            <input type="text" name="name" placeholder="Nom complet" 
                                class="w-full pb-4 bg-transparent border-t-0 border-x-0 border-b border-gray-100 focus:border-red-900 focus:ring-0 outline-none transition-all placeholder:text-gray-200 font-light italic">
                        </div>
                        <div class="relative group">
                            <label class="text-[9px] font-black text-black uppercase tracking-[0.3em] mb-4 block">Votre Email</label>
                            <input type="email" name="email" placeholder="adresse@email.com" 
                                class="w-full pb-4 bg-transparent border-t-0 border-x-0 border-b border-gray-100 focus:border-red-900 focus:ring-0 outline-none transition-all placeholder:text-gray-200 font-light italic">
                        </div>
                    </div>

                    <div class="relative">
                        <label class="text-[9px] font-black text-black uppercase tracking-[0.3em] mb-4 block">Sujet de l'échange</label>
                        <select name="subject" class="w-full pb-4 bg-transparent border-t-0 border-x-0 border-b border-gray-100 focus:border-red-900 focus:ring-0 outline-none transition-all appearance-none font-light italic text-gray-500">
                            <option>Demande d'information culturelle</option>
                            <option>Partenariat / Artiste</option>
                            <option>Soutien & Bénévolat</option>
                            <option>Autre demande</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-0 bottom-4 text-[10px] text-gray-300 pointer-events-none"></i>
                    </div>

                    <div class="relative">
                        <label class="text-[9px] font-black text-black uppercase tracking-[0.3em] mb-4 block">Votre Message</label>
                        <textarea name="message" rows="4" placeholder="Écrivez ici..." 
                            class="w-full pb-4 bg-transparent border-t-0 border-x-0 border-b border-gray-100 focus:border-red-900 focus:ring-0 outline-none transition-all resize-none placeholder:text-gray-200 font-light italic"></textarea>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="group flex items-center gap-8 text-[11px] font-black uppercase tracking-[0.4em] text-black">
                            Envoyer la demande
                            <span class="relative flex items-center">
                                <span class="w-12 h-[1px] bg-black group-hover:w-20 transition-all duration-500"></span>
                                <i class="fas fa-paper-plane text-[8px] ml-2 opacity-0 group-hover:opacity-100 transition-all"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</section>

{{-- Section Carte - Style Minimaliste Arched --}}

<section class="pb-32 px-6">
<div class="max-w-7xl mx-auto h-[500px] overflow-hidden grayscale hover:grayscale-0 transition-all duration-[3s] shadow-inner" style="border-radius: 250px 250px 40px 40px;">
<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.33!2d-61.07!3d14.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDM2JzAwLjAiTiA2McKwMDQnMDAuMCJX!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr"
class="w-full h-full border-0"
allowfullscreen=""
loading="lazy">
</iframe>
</div>
</section>
@endsection