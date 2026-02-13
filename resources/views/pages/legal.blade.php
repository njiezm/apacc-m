@extends('layouts.app')

@section('title', 'Mentions Légales - APACC-M')

@section('content')
{{-- Header de page sobre --}}
<section class="relative pt-32 pb-16 bg-slate-950">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter">Mentions <span class="text-red-600">Légales</span></h1>
        <div class="w-16 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
    </div>
</section>

<section class="py-20 px-6 max-w-4xl mx-auto">
    <div class="prose prose-slate max-w-none space-y-12 text-slate-600 leading-relaxed">
        
        <div class="bg-slate-50 p-10 rounded-[3rem] border border-slate-100 shadow-sm">
            <h2 class="text-xl font-black text-slate-900 mb-6 uppercase tracking-widest flex items-center gap-3">
                <span class="w-2 h-6 bg-red-600 rounded-full"></span>
                1. Éditeur du site
            </h2>
            <p class="mb-6">Le site <strong>apacc-m.fr</strong> est édité par l'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M).</p>
            
            <div class="grid sm:grid-cols-2 gap-6 bg-white p-6 rounded-2xl border border-slate-100">
                <div class="space-y-1">
                    <p class="text-[10px] font-black text-red-600 uppercase tracking-widest">Siège social</p>
                    <p class="text-slate-900 font-medium">11 Avenue Franz Fanon <br> 97200 Fort de France</p>
                </div>
                <div class="space-y-1">
                    <p class="text-[10px] font-black text-red-600 uppercase tracking-widest">Identifiants</p>
                    <p class="text-slate-900 font-medium">Siret : 924 433 808 00012 <br> RNA : W9M1011611</p>
                </div>
            </div>
            <p class="mt-6 italic text-sm text-slate-500">Responsable de publication : Le Président de l'association</p>
        </div>

        <div>
            <h2 class="text-xl font-black text-slate-900 mb-4 uppercase tracking-widest flex items-center gap-3">
                <span class="w-2 h-6 bg-red-600 rounded-full"></span>
                2. Hébergement
            </h2>
            <p>Ce site internet est hébergé par <strong>[Nom de l'hébergeur]</strong>, dont le siège social est situé à [Adresse de l'hébergeur].</p>
        </div>

        <div class="pt-8 border-t border-slate-100">
            <h2 class="text-xl font-black text-slate-900 mb-4 uppercase tracking-widest flex items-center gap-3">
                <span class="w-2 h-6 bg-red-600 rounded-full"></span>
                3. Propriété intellectuelle
            </h2>
            <p>L'ensemble des contenus (textes, graphismes, logos, sons, photos, vidéos) présents sur ce site est la propriété exclusive de l'<strong>APACC-M</strong> ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable.</p>
        </div>
    </div>
</section>
@endsection