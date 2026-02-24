@extends('layouts.app')

@section('title', 'À propos de l\'APACC-M')

@section('content')

<section class="py-24 px-6 max-w-6xl mx-auto">
    {{-- En-tête de page --}}
    <div class="mb-24 text-center">
        <div class="flex flex-col items-center mb-10">
            <span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-800 mb-6">Notre Histoire</span>
            <div class="h-[1px] w-12 bg-red-200 mb-10"></div>

            <h2 class="font-display text-4xl md:text-6xl font-extrabold text-black mb-10 leading-[1.1] tracking-tighter uppercase">
                Missions & <br>
                <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Engagements</span>
            </h2>
            
            <p class="text-xl text-gray-500 max-w-3xl mx-auto font-light leading-relaxed italic">
                "L'APACC-M est née d'une volonté profonde de faire rayonner l'identité chrétienne au cœur de la culture martiniquaise."
            </p>
        </div>
    </div>

    {{-- Mot du Président --}}
    <div class="mb-24 bg-gradient-to-r from-red-50 to-transparent p-12 md:p-16 border-l-4 border-red-700">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-[10px] font-black uppercase tracking-[0.5em] text-red-700 mb-8 italic">Mot du Président</h3>
            <div class="space-y-6">
                <p class="text-gray-700 leading-relaxed text-lg font-light italic">
                    "Pourquoi l'APACC-M ?
                </p>
                <p class="text-gray-700 leading-relaxed text-lg font-light">
                    Parce que tout art a une culture. Le transcendant est déjà présent en l'homme. Il y a quelque chose qui est inscrit dans l'homme et qui l'amène à un dépassement.
                    Et l'artiste peut exprimer cette réalité, inscrite en l'homme et en toutes choses ; ce qui nous amène finalement à nous élever au-dessus de la simple matérialité des choses. Et c'est là que se trouve aussi l'universalisme, l'universalité de l'art : une Parole est dite, par l'œuvre artistique, pour le monde et pour la culture locale, la culture créole, et qui permet de dépasser les drames de l'humanité, comme celui de l'esclavage, vers quelque chose de transcendant. L'Art est en quelque sorte Résilience, parce qu'il permet et amène à ce dépassement-là.
                </p>
                <p class="text-gray-700 leading-relaxed text-lg font-light">
                    Finalement, l'artiste est tel un prophète, un élu, qui dit ce qu'on a du mal à entendre, révèle ce qu'on a du mal à voir, exprime la beauté déjà présente mais insuffisamment connue. L'artiste nous donne accès à une dimension de la réalité trop souvent insoupçonnée."
                </p>
                <p class="text-right text-red-800 font-medium mt-8">
                    Le Président de l'APACC-M
                </p>
            </div>
        </div>
    </div>

    {{-- Objet de l'association --}}
    <div class="mb-24 bg-red-900 text-white p-12 md:p-16">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-[10px] font-black uppercase tracking-[0.5em] text-red-200 mb-8 italic">Objet principal de l'association</h3>
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <span class="text-red-400 mt-1">•</span>
                    <p class="text-red-50 leading-relaxed text-lg">
                        Favoriser et soutenir toutes activités/initiatives culturelles et artistiques chrétiennes de Martinique,
                    </p>
                </div>
                <div class="flex items-start gap-4">
                    <span class="text-red-400 mt-1">•</span>
                    <p class="text-red-50 leading-relaxed text-lg">
                        D'assurer le développement et la valorisation des arts et de la culture chrétienne martiniquaise dite créole, sous toutes ses formes d'expression artistique : art sacré, art littéraire, linguistique, musical, pictural, patrimonial..., et d'en assurer la production, la diffusion, et la transmission à un large public,
                    </p>
                </div>
                <div class="flex items-start gap-4">
                    <span class="text-red-400 mt-1">•</span>
                    <p class="text-red-50 leading-relaxed text-lg">
                        Promouvoir le rapprochement entre arts et culture chrétienne et autres formes d'expressions artistiques et culturelles en Martinique
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Cartes Vision et Valeurs - Style Minimaliste --}}
    <div class="grid md:grid-cols-2 gap-16 mb-24">
        <div class="space-y-8 border-l border-gray-100 pl-10 relative">
            <div class="absolute -left-[1px] top-0 h-12 w-[1px] bg-red-600"></div>
            <h3 class="font-bold text-black text-2xl tracking-tighter uppercase flex items-center gap-4">
                <span class="text-red-800 font-light italic serif" style="font-family: 'Cinzel', serif;">01.</span> 
                Notre vision
            </h3>
            <p class="text-gray-500 leading-relaxed font-light text-lg">
                Promouvoir et valoriser l'art et la culture chrétienne martiniquaise, à travers notamment sa culture créole et son patrimoine. Nous soutenons les activités artistiques par des événements, des expositions et des formations.
            </p>
        </div>
        
        <div class="space-y-8 border-l border-gray-100 pl-10 relative">
            <div class="absolute -left-[1px] top-0 h-12 w-[1px] bg-red-600"></div>
            <h3 class="font-bold text-black text-2xl tracking-tighter uppercase flex items-center gap-4">
                <span class="text-red-800 font-light italic serif" style="font-family: 'Cinzel', serif;">02.</span> 
                Nos valeurs
            </h3>
            <p class="text-gray-500 leading-relaxed font-light text-lg">
                Dignité humaine, éthique, bienveillance et solidarité. L'association se veut un lieu de rencontre et de partage, un espace de dialogue pour la transmission des richesses de la culture créole.
            </p>
        </div>
    </div>

    {{-- Texte descriptif - Section Qui sommes-nous --}}
    <div class="py-24 border-y border-gray-50 mb-24">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 mb-12 text-center italic">Qui sommes-nous ?</h3>
            <div class="grid md:grid-cols-2 gap-16 text-gray-800 text-lg leading-relaxed font-light">
                <p>
                    L'Association pour la Promotion de l'Art et la Culture Chrétienne (APACC-M) s'adresse à tous : artistes confirmés, amateurs d'art, membres de la communauté chrétienne ou simples curieux.
                </p>
                <p>
                    Nous croyons que l'art est un vecteur universel de médiation et de paix. En documentant les œuvres inspirées par la foi, nous préservons une part essentielle de l'âme martiniquaise.
                </p>
            </div>
        </div>
    </div>

    {{-- Cadre Institutionnel (Style Archive/Musée) --}}
    <div class="bg-white border border-gray-100 p-12 md:p-20 shadow-sm relative overflow-hidden">
        <div class="relative z-10">
            <div class="text-center mb-16">
                <h3 class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-4">Informations Légales</h3>
                <h4 class="text-2xl font-bold tracking-tighter uppercase italic" style="font-family: 'Cinzel', serif;">Cadre Institutionnel</h4>
            </div>
            
            <div class="grid md:grid-cols-2 gap-16">
                <div class="space-y-10">
                    <div class="flex flex-col gap-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">Statut Juridique</span>
                        <span class="text-lg font-medium text-black">Association loi 1901</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">RNA</span>
                        <span class="text-lg font-medium text-black">W9M1011611</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">SIRET</span>
                        <span class="text-lg font-medium text-black">924 433 808 00012</span>
                    </div>
                </div>
                
                <div class="space-y-10 border-l border-gray-50 md:pl-16">
                    <div class="flex flex-col gap-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">Siège Social</span>
                        <span class="text-lg font-medium text-black leading-snug">
                            11 Avenue Franz Fanon <br>
                            97200 Fort de France
                        </span>
                    </div>
                    <div class="flex flex-col gap-2 pt-4">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-gray-50 rounded-full w-fit">
                            <i class="fas fa-balance-scale text-red-700 text-xs"></i>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-gray-500">Enregistrée en Préfecture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Filigrane discret --}}
        <div class="absolute -bottom-10 -right-10 opacity-[0.03] select-none pointer-events-none">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-96 grayscale">
        </div>
    </div>

    {{-- CTA Final --}}
    <div class="mt-32 text-center">
        <div class="h-[1px] w-24 bg-gray-100 mx-auto mb-12"></div>
        <p class="text-gray-400 mb-10 italic text-xl font-light serif" style="font-family: 'Cinzel', serif;">"L'art est le reflet de l'âme d'un peuple."</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-12 py-5 bg-black text-white text-[11px] font-bold uppercase tracking-[0.3em] hover:bg-red-900 transition-all duration-500">
            Nous contacter 
            <span class="ml-4 transform transition-transform group-hover:translate-x-1">→</span>
        </a>
    </div>
</section>
@endsection