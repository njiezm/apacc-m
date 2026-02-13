@extends('layouts.app')

@section('title', 'Contact - APACC-M')

@section('content')
{{-- Hero Section Prestige --}}
<section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 via-slate-950 to-slate-950"></div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 tracking-tighter uppercase">Restons en <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-amber-500">Contact</span></h1>
        <p class="text-slate-400 max-w-2xl mx-auto text-lg leading-relaxed italic">"Une question, un projet ou une envie de contribuer ? Notre équipe vous répond avec bienveillance."</p>
    </div>
</section>

<section class="py-20 px-6 -mt-16 relative z-20">
    <div class="max-w-6xl mx-auto">
        <div class="bg-white rounded-[3.5rem] shadow-2xl overflow-hidden border border-slate-100">
            <div class="grid lg:grid-cols-5 gap-0">
                
                {{-- Colonne Infos Sombre (2/5) --}}
                <div class="lg:col-span-2 bg-slate-900 p-10 md:p-14 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-black mb-12 uppercase tracking-tight">Nos Coordonnées</h3>
                        
                        <div class="space-y-10">
                            <div class="flex items-start gap-6 group">
                                <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-amber-500 group-hover:bg-red-600 group-hover:text-white transition-all duration-500">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-red-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Siège social</p>
                                    <p class="text-lg leading-snug font-medium text-slate-200">11 Avenue Franz Fanon,<br>97200 Fort de France</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6 group">
                                <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-amber-500 group-hover:bg-red-600 group-hover:text-white transition-all duration-500">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-red-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Téléphone</p>
                                    <p class="text-lg font-medium text-slate-200">0596 61 23 45</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6 group">
                                <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-amber-500 group-hover:bg-red-600 group-hover:text-white transition-all duration-500">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-red-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Email</p>
                                    <p class="text-lg font-medium text-slate-200">contact@apacc-martinique.org</p>
                                </div>
                            </div>
                        </div>

                        {{-- Réseaux Sociaux --}}
                        <div class="mt-20">
                            <p class="text-slate-500 text-[10px] uppercase font-black tracking-[0.2em] mb-6">Suivez notre actualité</p>
                            <div class="flex gap-4">
                                @foreach(['facebook-f', 'instagram', 'youtube'] as $icon)
                                <a href="#" class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition-all text-slate-300 hover:text-white">
                                    <i class="fab fa-{{ $icon }}"></i>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Décoration --}}
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-red-600/10 rounded-full -mr-32 -mb-32 blur-3xl"></div>
                </div>

                {{-- Colonne Formulaire (3/5) --}}
                <div class="lg:col-span-3 p-10 md:p-14 bg-white">
                    <form action="#" method="POST" class="space-y-8">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-3">
                                <label class="text-xs font-black text-slate-900 uppercase tracking-widest ml-1">Nom complet</label>
                                <input type="text" name="name" placeholder="Votre nom" 
                                    class="w-full px-6 py-5 bg-slate-50 border border-slate-100 rounded-[1.5rem] focus:ring-4 focus:ring-red-600/5 focus:border-red-600/30 outline-none transition-all placeholder:text-slate-300">
                            </div>
                            <div class="space-y-3">
                                <label class="text-xs font-black text-slate-900 uppercase tracking-widest ml-1">Adresse email</label>
                                <input type="email" name="email" placeholder="email@exemple.com" 
                                    class="w-full px-6 py-5 bg-slate-50 border border-slate-100 rounded-[1.5rem] focus:ring-4 focus:ring-red-600/5 focus:border-red-600/30 outline-none transition-all placeholder:text-slate-300">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-xs font-black text-slate-900 uppercase tracking-widest ml-1">Sujet de votre message</label>
                            <div class="relative">
                                <select name="subject" class="w-full px-6 py-5 bg-slate-50 border border-slate-100 rounded-[1.5rem] focus:ring-4 focus:ring-red-600/5 outline-none transition-all appearance-none font-medium text-slate-700">
                                    <option>Demande d'information</option>
                                    <option>Partenariat / Artiste</option>
                                    <option>Devenir bénévole</option>
                                    <option>Autre demande</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-6 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-xs font-black text-slate-900 uppercase tracking-widest ml-1">Votre message</label>
                            <textarea name="message" rows="5" placeholder="Comment pouvons-nous vous aider ?" 
                                class="w-full px-6 py-5 bg-slate-50 border border-slate-100 rounded-[1.5rem] focus:ring-4 focus:ring-red-600/5 outline-none transition-all resize-none placeholder:text-slate-300"></textarea>
                        </div>

                        <button type="submit" class="group w-full md:w-auto px-12 py-5 bg-red-600 hover:bg-slate-900 text-white font-black uppercase tracking-[0.2em] text-xs rounded-2xl transition-all shadow-xl shadow-red-600/20 flex items-center justify-center gap-4 transform hover:-translate-y-1">
                            Envoyer le message
                            <i class="fas fa-paper-plane text-[10px] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Carte --}}
<section class="pb-24 px-6">
    <div class="max-w-6xl mx-auto h-[450px] rounded-[3.5rem] overflow-hidden border-8 border-white shadow-2xl relative">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.33!2d-61.07!3d14.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDM2JzAwLjAiTiA2McKwMDQnMDAuMCJX!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr" 
            class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-[2s]" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
        <div class="absolute inset-0 pointer-events-none border-[1px] border-black/5 rounded-[3.5rem]"></div>
    </div>
</section>
@endsection