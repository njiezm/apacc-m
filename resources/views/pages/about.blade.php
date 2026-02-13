@extends('layouts.app')

@section('title', 'À propos de l\'APACC-M')

@section('content')
<section class="py-20 px-6 max-w-5xl mx-auto">
    {{-- En-tête de page --}}
    <div class="mb-16 text-center">
        <div class="inline-block p-3 rounded-full bg-red-50 mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto">
        </div>
        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">Notre Mission & Nos Engagements</h2>
        <p class="text-lg text-slate-600 leading-relaxed max-w-3xl mx-auto">
            L'APACC-M est née d'une volonté profonde de faire rayonner l'identité chrétienne au cœur de la culture martiniquaise.
        </p>
    </div>

    {{-- Cartes Vision et Valeurs --}}
    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white p-8 rounded-[2.5rem] border border-red-100 shadow-sm group hover:border-red-200 transition-all">
            <h3 class="font-bold text-red-600 text-xl mb-4 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i class="fas fa-eye"></i>
                </div>
                Notre vision
            </h3>
            <p class="text-slate-600 leading-relaxed">
                Promouvoir et valoriser l'art et la culture chrétienne martiniquaise, à travers notamment sa culture créole et son patrimoine. Nous soutenons les activités artistiques par des événements, des expositions et des formations.
            </p>
        </div>
        
        <div class="bg-red-600 p-8 rounded-[2.5rem] text-white shadow-xl shadow-red-600/20 relative overflow-hidden group">
            <div class="relative z-10">
                <h3 class="font-bold text-amber-400 text-xl mb-4 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-amber-400">
                        <i class="fas fa-heart"></i>
                    </div>
                    Nos valeurs
                </h3>
                <p class="text-white/90 leading-relaxed font-medium">
                    Dignité humaine, éthique, bienveillance et solidarité. L'association se veut un lieu de rencontre et de partage, un espace de dialogue pour la transmission des richesses de la culture créole.
                </p>
            </div>
            {{-- Décoration subtile en fond de carte --}}
            <div class="absolute -bottom-6 -right-6 text-white/10 text-8xl transform -rotate-12 group-hover:rotate-0 transition-transform">
                <i class="fas fa-cross"></i>
            </div>
        </div>
    </div>

    {{-- Texte descriptif --}}
    <div class="bg-white p-10 md:p-14 rounded-[3rem] border border-slate-100 shadow-sm mb-12 relative">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-6">
            <i class="fas fa-ellipsis-h text-amber-500 tracking-[0.5em]"></i>
        </div>
        
        <h3 class="text-2xl font-bold text-slate-900 mb-8 text-center md:text-left">Qui sommes-nous ?</h3>
        <div class="grid md:grid-cols-2 gap-10 text-slate-600 text-lg leading-relaxed italic">
            <p>
                L'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M) s'adresse à tous : artistes confirmés, amateurs d'art, membres de la communauté chrétienne ou simples curieux.
            </p>
            <p>
                Nous croyons que l'art est un vecteur universel de médiation et de paix. En documentant les œuvres inspirées par la foi, nous préservons une part essentielle de l'âme martiniquaise.
            </p>
        </div>
    </div>

    {{-- Cadre Institutionnel (Style Solennel) --}}
    <div class="bg-slate-900 text-slate-300 p-10 md:p-14 rounded-[3rem] relative overflow-hidden border-b-8 border-amber-500">
        <div class="relative z-10">
            <div class="flex items-center gap-4 mb-10">
                <h3 class="text-2xl font-bold text-white uppercase tracking-widest text-sm italic">Cadre Institutionnel</h3>
                <div class="flex-grow h-px bg-slate-800"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center group-hover:border-amber-500 transition-colors">
                            <i class="fas fa-file-signature text-amber-500"></i>
                        </div>
                        <span class="text-base"><strong>Statut :</strong> Association loi 1901</span>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center group-hover:border-amber-500 transition-colors">
                            <i class="fas fa-hashtag text-amber-500"></i>
                        </div>
                        <span class="text-base"><strong>RNA :</strong> W9M1011611</span>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center group-hover:border-amber-500 transition-colors">
                            <i class="fas fa-id-card text-amber-500"></i>
                        </div>
                        <span class="text-base"><strong>Siret :</strong> 924 433 808 00012</span>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center group-hover:border-amber-500 transition-colors shrink-0">
                            <i class="fas fa-map-marker-alt text-amber-500"></i>
                        </div>
                        <span class="text-base leading-snug"><strong>Siège Social :</strong><br>11 Avenue Franz Fanon, 97200 Fort de France</span>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center group-hover:border-amber-500 transition-colors">
                            <i class="fas fa-balance-scale text-amber-500"></i>
                        </div>
                        <span class="text-base italic">Enregistrée à la Préfecture de la Martinique</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- Effet de lumière dorée --}}
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-amber-500/5 rounded-full blur-3xl"></div>
    </div>

    {{-- CTA Final --}}
    <div class="mt-20 text-center">
        <p class="text-slate-500 mb-8 italic text-lg font-serif">"L'art est le reflet de l'âme d'un peuple."</p>
        <a href="{{ route('contact') }}" class="group inline-flex items-center gap-4 px-10 py-5 bg-red-600 text-white rounded-2xl font-bold shadow-xl shadow-red-600/30 hover:bg-red-700 transition-all hover:-translate-y-1">
            Nous contacter pour plus d'infos 
            <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>
</section>
@endsection