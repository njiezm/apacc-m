@extends('layouts.app')

@section('title', 'Patrimoine Chrétien - APACC-M')

@section('content')
{{-- Hero Section Patrimoine --}}
<header class="pt-32 pb-24 px-6 bg-white overflow-hidden">
<div class="max-w-6xl mx-auto text-center">
<span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8 block">Histoire & Spiritualité</span>

    <h1 class="font-display text-5xl md:text-8xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
        Patrimoine <br>
        <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Chrétien</span>
    </h1>
    
    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed italic">
        "Découvrez les édifices, les lieux de mémoire et le patrimoine immatériel chrétien qui façonnent l'âme de la Martinique"
    </p>
</div>
</header>

<section class="pb-32 px-6 mt-5">
<div class="max-w-7xl mx-auto">
{{-- Grille principale modifiée en 4 colonnes --}}
<div class="grid lg:grid-cols-4 gap-16 lg:gap-10 items-start">

        {{-- Section Églises Remarquables - Colonne Gauche --}}
        <div class="space-y-16">
            <div class="group">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-2xl font-bold tracking-tighter uppercase">Églises Remarquables</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Témoins de l'architecture créole et de la ferveur populaire.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalCathedraleSaintLouis">Cathédrale Saint-Louis</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Structure métallique iconique signée Henri Picq.</p>
                        </li>
                        <!--li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Saint-Pierre</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalCoCathedrale">Co Cathédrale ND de l'Assomption</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Élégance baroque et résilience face à l'éruption de 1902.</p>
                        </!--li-->
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Trois Îlets</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalSacreCoeur">Eglise ND de la Bonne Délivrance</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">De la chapelle de Cul-de-sac-à-vaches (1683) à l’église Notre Dame de la
Délivrance</p>
                        </li>
                        {{-- <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Saint-Pierre</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalEgliseSacreCoeur">CO Cathédrale de St Pierre :</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Reconstruite après l'éruption de 1902, mémoire de la ville.</p>
                        </li> --}}
                        
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Carbet</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalSaintJacques">Église Saint-Jacques</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Un sanctuaire historique parmi les plus anciens de l'île.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Saint Piere</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalNotreDameAssomption">CO Cathédrale Notre-Dame de l'Assomption</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Joyau architectural du 17ème siècle, l'une des plus anciennes.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Section Sanctuaires - Colonne 2 --}}
        <div class="space-y-16">
            <div class="group">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-2xl font-bold tracking-tighter uppercase">Sanctuaires</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Lieux de pèlerinage et de dévotion, hauts lieux de spiritualité.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalSaintAntoine">Saint Antoine de Padoue</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Sanctuaire des Terres Sainville, lieu de prière et de recueillement.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalBalata">Basilique Montmartre de Balata</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Réplique parfaite du Sacré-Cœur, vue panoramique exceptionnelle.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Le Morne Rouge</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalDelivrande">ND de la Délivrande</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Sanctuaire marial au cœur de la montagne, pèlerinage important.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Section Calvaires - Colonne 3 --}}
        <div class="space-y-16">
            <div class="group">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-2xl font-bold tracking-tighter uppercase">Calvaires & Chemins</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Sentinelles silencieuses perchées sur nos mornes, offrant un point de recueillement face aux grands paysages.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalCalvaire">Chapelle du Calvaire</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">(1874-1935) Point de vue exceptionnel sur la ville basse, chemin de croix traditionnel.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Fort-de-France</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalPichevin">Chemin de Croix du Morne Pichevin</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Surplombant la baie, un lieu de pèlerinage important.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Sainte-Anne</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalSalette">Notre Dame de la Salette</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Chemin de croix spirituel au cœur du sud de l'île.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Morne-Rouge</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalMorneRouge">Chemin de Croix</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Ascension spirituelle face à la majestueuse Montagne Pelée.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Sainte-Marie</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalSainteMarie">Le Calvaire</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Halte sacrée surplombant l'immensité de l'Atlantique.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Section Art & Tradition - Colonne Droite --}}
        <div class="space-y-16">
            <div class="group">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="w-12 h-[1px] bg-red-900"></span>
                        <h3 class="text-2xl font-bold tracking-tighter uppercase">Art & Tradition</h3>
                    </div>
                    <p class="text-gray-500 font-light italic leading-relaxed">
                        Au-delà de la pierre, un patrimoine vivant où la foi s'exprime à travers l'art, la musique et les savoir-faire locaux.
                    </p>
                    
                    <ul class="space-y-8 pt-6">
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Oeuvres</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalStatuaire">Statuaire & Retables</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Statues de la Vierge en bois de rose, Saint Jacques le Majeur en procession.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Trésors d'Église</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalOrfevrerie">Orfèvrerie & Objets Liturgiques</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">Calices et ostensoirs remarquables, symboles de la ferveur populaire.</p>
                        </li>
                        <li class="border-b border-gray-100 pb-6 group/item">
                            <span class="text-[9px] font-black text-red-800 uppercase tracking-widest block mb-2">Spiritualité Chantée</span>
                            <h4 class="text-xl font-bold uppercase tracking-tight group-hover/item:text-red-900 transition-colors cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalMusique">Musique sacré et tradition créole</h4>
                            <p class="text-sm text-gray-400 font-light italic mt-1">De l'orgue Cavaillé-Coll au Bélè Légliz, une âme musicale créole.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
</section>

{{-- Section Visites Guidées - Style Narthex Sombre --}}
<section class="py-32 bg-black text-white px-6">
<div class="max-w-5xl mx-auto">
<div class="text-center mb-20">
<h3 class="font-display text-3xl md:text-5xl font-bold mb-6 uppercase tracking-tighter">Visites <span class="italic font-light serif text-red-400" style="font-family: 'Cinzel', serif;">Guidées</span></h3>
<p class="text-gray-400 font-light italic">Découvrez nos circuits thématiques pour explorer le patrimoine chrétien de la Martinique.</p>
</div>

    <div class="grid md:grid-cols-3 gap-8">
        {{-- Circuit Nord --}}
        <div class="p-10 border border-white/10 rounded-[2rem] hover:bg-white/5 transition-all flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-red-400 px-3 py-1 border border-red-400/30 rounded-full">Nord</span>
                    <i class="fas fa-arrow-right text-xs opacity-20 group-hover:opacity-100"></i>
                </div>
                <h4 class="text-2xl font-bold uppercase tracking-tight mb-2">Circuit Nord</h4>
                <p class="text-sm text-gray-400 font-light italic">Des églises historiques de Saint-Pierre aux sanctuaires du Morne Rouge, découverte du patrimoine du nord.</p>
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block w-full py-4 bg-white text-black text-center text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-red-400 transition-colors">
                    S'inscrire
                </a>
            </div>
        </div>

        {{-- Circuit Centre --}}
        <div class="p-10 border border-white/10 rounded-[2rem] hover:bg-white/5 transition-all flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-red-400 px-3 py-1 border border-red-400/30 rounded-full">Centre</span>
                </div>
                <h4 class="text-2xl font-bold uppercase tracking-tight mb-2">Circuit Centre</h4>
                <p class="text-sm text-gray-400 font-light italic">Fort-de-France et ses trésors, de la cathédrale Saint-Louis aux calvaires surplombant la ville.</p>
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block w-full py-4 border border-white/20 text-white text-center text-[10px] font-black uppercase tracking-widest rounded-full transition-all duration-300 hover:bg-white hover:!text-black">
                    S'inscrire
                </a>
            </div>
        </div>

        {{-- Circuit Sud --}}
        <div class="p-10 border border-white/10 rounded-[2rem] hover:bg-white/5 transition-all flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-8">
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-red-400 px-3 py-1 border border-red-400/30 rounded-full">Sud</span>
                </div>
                <h4 class="text-2xl font-bold uppercase tracking-tight mb-2">Circuit Sud</h4>
                <p class="text-sm text-gray-400 font-light italic">De Sainte-Anne au Diamant, exploration des églises du sud et des sites de pèlerinage côtiers.</p>
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block w-full py-4 border border-white/20 text-white text-center text-[10px] font-black uppercase tracking-widest rounded-full transition-all duration-300 hover:bg-white hover:!text-black">
                    S'inscrire
                </a>
            </div>
        </div>
    </div>
</div>
</section>

{{-- Modals Bootstrap --}}
<!-- Modal Cathédrale Saint-Louis -->
<div class="modal fade" id="modalCathedraleSaintLouis" tabindex="-1" aria-labelledby="modalCathedraleSaintLouisLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="modalCathedraleSaintLouisLabel">Cathédrale Saint – Louis de Fort de France</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- Image -->
        <img src="images/cathedralesl.jpg" class="img-fluid rounded mb-3" alt="Cathédrale Saint Louis Fort de France">

        <p>Près de deux siècles séparent les premières chapelles en paille, édifiées vers 1665, de la construction de la cathédrale Saint-Louis en 1865. L'histoire débute avec l'installation des Capucins et l'édification d'une première chapelle, puis d'une chapelle paroissiale dédiée à saint Louis sur l'actuel site de la cathédrale (1667).</p>
        <p>Au fil du temps, l'édifice est incendié, détruit, reconstruit, endommagé puis agrandi.</p>
        <p>Inaugurée cathédrale en 1854, après la création du diocèse de Saint-Pierre et Fort-de-France, elle est à nouveau détruite par un incendie en 1890. L'actuelle cathédrale est alors reconstruite dès 1891 par l'architecte Pierre-Henri Picq.</p>
        <p>De style néogothique, longue de 66 mètres et haute de près de 59 mètres grâce à son ossature métallique, elle abrite vitraux, mobilier ancien, autel en marbre et sépultures de marquis et gouverneurs. Un édifice emblématique à découvrir.</p>

        <p class="text-sm text-gray-500 mt-3">Inscription aux monuments historiques</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal Sanctuaire de Balata -->
<div class="modal fade" id="modalBalata" tabindex="-1" aria-labelledby="modalBalataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBalataLabel">Sanctuaire de Balata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Né de la volonté de Mgr Lequien de faire de Balata « le Sacré Cœur martiniquais » , la 1ère pierre de l'édifice construit selon des plans identiques à celui de Paris, est posée le 2 mars 1923. L'église remplace la petite chapelle de la fin du 19 eme siècle, un des premiers édifices construits en béton avec la technique des poteaux poutres.</p>
        <p>Le 15 aout 1924 a lieu la première célébration, l'église est toujours en construction.</p>
        <p>Une première bénédiction a lieu le 9 août 1925 par le Père Eugène de Jaham "en présence de plus de 10 000 personnes", et reçoit la bénédiction solennelle le 20 mai 1926.</p>
        <p>La statue du Sacré Cœur, venue de France par bateau est selon la petite histoire « miraculée » car échappée à deux incendies. La basilique de Balata abrite la tombe de Mgr Lequien. La mise en place des vitraux date de 1948 (verrier Pierre Turpin).</p>
        <p class="text-sm text-gray-500 mt-3">Inscription au monuments historiques (2015)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Église ND de la Bonne Délivrance -->
<div class="modal fade" id="modalBonneDelivrance" tabindex="-1" aria-labelledby="modalBonneDelivranceLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBonneDelivranceLabel">Église ND de la Bonne Délivrance (Trois ilets)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <img src="images/cathedraleti.jpg" class="img-fluid rounded mb-3" alt="Cathédrale Saint Louis Fort de France">

        <p>De la chapelle de Cul-de-sac-à-vaches (1683) à l'église Notre Dame de la Délivrance (1763 date possible de sa bénédiction), l'histoire de cet édifice est étroitement liée à celle de la famille de l'impératrice Joséphine. Elle est le lieu du mariage de ses parents en 1761, de son baptême en 1763, de l'inhumation de Mme de la Pagerie (sa mère) en 1807.</p>
        <p>Jusqu'à la 1ere moitié du 20 eme siècle, toutes les cérémonies de la famille impériale y sont célébrées.</p>
        <p class="text-sm text-gray-500 mt-3">Inscription au monuments historiques (1993)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Cathédrale de St Pierre -->
<div class="modal fade" id="modalCathedraleStPierre" tabindex="-1" aria-labelledby="modalCathedraleStPierreLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCathedraleStPierreLabel">Cathédrale de St Pierre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/cathedralesp.jpg" class="img-fluid rounded mb-3" alt="Cathédrale Saint Louis Fort de France">
        <p>L'Eglise du Fort, construite avant 1640 est vraisemblablement la plus ancienne. C'est d'abord une chapelle, puis une église paroissiales après la délimitation des paroisses de St Pierre. En 1851, l'église du Mouillage est érigée en cathédrale à l'arrivée du premier évêque de Saint-Pierre et de Fort-de-France, Mgr Leherpeur.</p>
        <p>L'éruption de 1902 détruit en grande partie l'édifice. Elle est reconstruite en 1923-1924 sur les bases de l'ancienne, les travaux se poursuivent jusqu'en 1929. 3 évêques y reposent : Mgr Leherpeur (1858) – Mgr Porchez. (1860) – Mgr Tanoux (1899). Le maitre-autel en marbre blanc de l'ancienne cathédrale n'y revient qu'en 1939. Malgré son apparence d'édifice en pierre, la structure de la cathédrale est en "ciment armé", de juin 2021 à décembre 2023 des travaux de restauration ont été entrepris.</p>
        <p class="text-sm text-gray-500 mt-3">Inscription au monuments historiques (1995)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Co Cathédrale ND de l'Assomption -->
<div class="modal fade" id="modalCoCathedrale" tabindex="-1" aria-labelledby="modalCoCathedraleLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCoCathedraleLabel">Co Cathédrale ND de l'Assomption</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <img src="images/cathedralesp.jpg" class="img-fluid rounded mb-3" alt="Cathédrale Saint Louis Fort de France">

        <p>L'Eglise du Fort, construite avant 1640 est vraisemblablement la plus ancienne. C'est d'abord une chapelle, puis une église paroissiales après la délimitation des paroisses de St Pierre. En 1851, l'église du Mouillage est érigée en cathédrale à l'arrivée du premier évêque de Saint-Pierre et de Fort-de-France, Mgr Leherpeur.</p>
        <p>L'éruption de 1902 détruit en grande partie l'édifice. Elle est reconstruite en 1923-1924 sur les bases de l'ancienne, les travaux se poursuivent jusqu'en 1929. 3 évêques y reposent : Mgr Leherpeur (1858) – Mgr Porchez. (1860) – Mgr Tanoux (1899). Le maitre-autel en marbre blanc de l'ancienne cathédrale n'y revient qu'en 1939. Malgré son apparence d'édifice en pierre, la structure de la cathédrale est en "ciment armé", de juin 2021 à décembre 2023 des travaux de restauration ont été entrepris.</p>
        <p class="text-sm text-gray-500 mt-3">Inscription au monuments historiques (1995)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Église du Sacré-Cœur -->
<div class="modal fade" id="modalEgliseSacreCoeur" tabindex="-1" aria-labelledby="modalEgliseSacreCoeurLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEgliseSacreCoeurLabel">CO Cathédrale de St Pierre :</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>L’Eglise du Fort, construite avant 1640 est vraisemblablement la plus ancienne.
C’est d’abord une chapelle, puis une église paroissiales après la délimitation des
paroisses de St Pierre. En 1851, l'église du Mouillage est érigée en cathédrale à
l'arrivée du premier évêque de Saint-Pierre et de Fort-de-France, Mgr Leherpeur.</p>
        <p>1924 sur les bases de l'ancienne, les travaux se poursuivent jusqu'en 1929. 3
évêques y reposent : Mgr Leherpeur (1858) – Mgr Porchez. (1860) – Mgr Tanoux
(1899). Le maitre-autel en marbre blanc de l’ancienne cathédrale n’y revient qu’en
1939. Malgré son apparence d'édifice en pierre, la structure de la cathédrale est en
ciment armé, de juin 2021 à décembre 2023 des travaux de restauration ont été
entrepris.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Église Saint-Jacques -->
<div class="modal fade" id="modalSaintJacques" tabindex="-1" aria-labelledby="modalSaintJacquesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSaintJacquesLabel">Église Saint-Jacques</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>L'église Saint-Jacques du Carbet est l'un des plus anciens sanctuaires de la Martinique. Fondée au 17ème siècle, elle a été témoin de l'évolution historique et religieuse de l'île.</p>
        <p>Son architecture reflète les premières influences coloniales adaptées au contexte tropical martiniquais. L'église a connu plusieurs restaurations au fil des siècles pour préserver son patrimoine architectural tout en continuant à servir la communauté locale.</p>
        <p>Située dans une région historiquement importante de l'île, l'église Saint-Jacques représente un jalon essentiel du patrimoine religieux martiniquais.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Notre-Dame de l'Assomption -->
<div class="modal fade" id="modalNotreDameAssomption" tabindex="-1" aria-labelledby="modalNotreDameAssomptionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNotreDameAssomptionLabel">Notre-Dame de l'Assomption</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>L'église Notre-Dame de l'Assomption de Case-Pilote est l'un des joyaux architecturaux du 17ème siècle en Martinique. Considérée comme l'une des plus anciennes églises de l'île, elle témoigne des premières édifications religieuses après la colonisation.</p>
        <p>Son architecture unique mélange des styles européens adaptés aux contraintes climatiques tropicales. Les matériaux locaux et les techniques de construction traditionnelles ont été utilisés pour créer cet édifice remarquable.</p>
        <p>Au fil des siècles, l'église a été le cœur spirituel et communautaire de Case-Pilote, abritant des œuvres d'art religieuses et servant de cadre aux événements marquants de la vie paroissiale.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Saint Antoine de Padoue -->
<div class="modal fade" id="modalSaintAntoine" tabindex="-1" aria-labelledby="modalSaintAntoineLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSaintAntoineLabel">Saint Antoine de Padoue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le sanctuaire Saint Antoine de Padoue, situé dans le quartier des Terres Sainville à Fort-de-France, est un lieu de prière et de recueillement important pour la communauté catholique de Martinique.</p>
        <p>Dédié à saint Antoine de Padoue, connu pour son pouvoir d'intercession et sa proximité avec les fidèles, ce sanctuaire accueille de nombreux pèlerins venus prier et demander des grâces particulières.</p>
        <p>L'architecture du lieu reflète une simplicité propice à la méditation et à la prière, tout en offrant un espace accueillant pour les célébrations liturgiques et les temps forts de la vie paroissiale.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Sacré-Cœur de Balata -->
<div class="modal fade" id="modalSacreCoeur" tabindex="-1" aria-labelledby="modalSacreCoeurLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSacreCoeurLabel">Eglise ND de la Bonne Délivrance (Trois ilets)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <img src="{{ asset('images/3i.jpg') }}" class="img-fluid w-50" alt="Photo 1"><br>
        <p>De la chapelle de Cul-de-sac-à-vaches (1683) à l’église Notre Dame de la
        Délivrance (1763 date possible de sa bénédiction), l’histoire de cet édifice est
        étroitement liée à celle de la famille de l’impératrice Joséphine.</p>
                <p>Elle est le lieu du
        mariage de ses parents en 1761, de son baptême en 1763, de l’inhumation de Mme
        de la Pagerie (sa mère) en 1807.</p>
                <p>Jusqu’à la 1ere moitié du 20 eme siècle, toutes les cérémonies de la famille
        impériale y sont célébrées.</p>
        <p>Inscription au monuments historiques (1993).</p>
        <p class="text-sm text-gray-500 mt-3">Inscription au monuments historiques (2015)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal ND de la Délivrande -->
<div class="modal fade" id="modalDelivrande" tabindex="-1" aria-labelledby="modalDelivrandeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDelivrandeLabel">ND de la Délivrande</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le sanctuaire Notre-Dame de la Délivrande, niché au cœur du Morne Rouge, est un lieu de pèlerinage marial majeur en Martinique. Perché sur les hauteurs de l'île, ce sanctuaire offre un cadre propice à la prière et à la contemplation.</p>
        <p>Dédié à la Vierge Marie sous le vocable de Notre-Dame de la Délivrande, ce lieu attire de nombreux fidèles, particulièrement lors des fêtes mariales et des temps forts de l'année liturgique.</p>
        <p>Le sanctuaire s'inscrit dans la tradition des pèlerinages montagnards, où l'élévation physique symbolise l'élévation spirituelle. Les fidèles y trouvent réconfort et espérance dans leur cheminement de foi.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Chapelle du Calvaire -->
<div class="modal fade" id="modalCalvaire" tabindex="-1" aria-labelledby="modalCalvaireLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCalvaireLabel">Chapelle du Calvaire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
                <img src="images/cathedralesc.jpg" class="img-fluid rounded mb-3" alt="Cathédrale Saint Louis Fort de France">

        <p>La Chapelle du Calvaire de Fort-de-France, édifiée entre 1874 et 1935, domine la ville depuis les hauteurs et offre un point de vue exceptionnel sur la ville basse et la baie.</p>
        <p>Ce lieu de prière est particulièrement connu pour son chemin de croix traditionnel qui permet aux fidèles de méditer sur la passion du Christ tout en profitant d'un panorama remarquable sur Fort-de-France.</p>
        <p>La chapelle elle-même, de style simple et fonctionnel, a été conçue pour accueillir les pèlerins et les habitants du quartier venus y chercher réconfort et spiritualité. Elle représente un jalon important de la vie religieuse fort-de-française.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Chemin de Croix du Morne Pichevin -->
<div class="modal fade" id="modalPichevin" tabindex="-1" aria-labelledby="modalPichevinLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPichevinLabel">Chemin de Croix du Morne Pichevin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le Chemin de Croix du Morne Pichevin surplombe la magnifique baie de Fort-de-France, offrant un cadre spectaculaire pour la méditation et la prière. Ce lieu de pèlerinage important attire de nombreux fidèles, particulièrement pendant le Carême et à l'approche de Pâques.</p>
        <p>Le parcours, jalonné de stations représentant les différentes étapes de la passion du Christ, permet aux fidèles de vivre une expérience spirituelle forte tout en contemplant la beauté naturelle du site.</p>
        <p>Ce lieu sacré témoigne de la foi vivante du peuple martiniquais qui, depuis des générations, gravit ces pentes en signe de pénitence et de dévotion.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Notre Dame de la Salette -->
<div class="modal fade" id="modalSalette" tabindex="-1" aria-labelledby="modalSaletteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSaletteLabel">Notre Dame de la Salette</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le sanctuaire Notre-Dame de la Salette à Sainte-Anne offre un chemin de croix spirituel au cœur du sud de l'île. Dédié à l'apparition mariale de La Salette en France, ce lieu rappelle le message de conversion et de réconciliation transmis par la Vierge Marie.</p>
        <p>Le parcours méditatif permet aux fidèles de s'unir à la souffrance du Christ tout en contemplant la beauté naturelle de la région de Sainte-Anne. Le site offre un cadre propice au recueillement et à la prière, loin de l'agitation touristique.</p>
        <p>Ce lieu de pèlerinage, bien que plus modeste que d'autres sanctuaires de l'île, représente un jalon important de la spiritualité mariale en Martinique.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Chemin de Croix du Morne-Rouge -->
<div class="modal fade" id="modalMorneRouge" tabindex="-1" aria-labelledby="modalMorneRougeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMorneRougeLabel">Chemin de Croix du Morne-Rouge</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le Chemin de Croix du Morne-Rouge offre une ascension spirituelle face à la majestueuse Montagne Pelée. Ce lieu de prière unique combine la méditation sur la passion du Christ avec la contemplation de l'un des paysages les plus impressionnants de Martinique.</p>
        <p>Le parcours, jalonné de stations qui invitent à la prière et au recueillement, permet aux fidèles de vivre une expérience spirituelle forte tout en s'élevant physiquement sur les flancs de la montagne.</p>
        <p>Ce lieu sacré témoigne de la capacité de la foi à s'incarner dans les paysages naturels de l'île, créant un dialogue entre la spiritualité et la beauté de la création.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Le Calvaire de Sainte-Marie -->
<div class="modal fade" id="modalSainteMarie" tabindex="-1" aria-labelledby="modalSainteMarieLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSainteMarieLabel">Le Calvaire de Sainte-Marie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Le Calvaire de Sainte-Marie est une halte sacrée surplombant l'immensité de l'Atlantique. Perché sur les hauteurs de la commune, ce lieu de prière offre un panorama spectaculaire sur l'océan, invitant à la contemplation et à la méditation.</p>
        <p>Cette station spirituelle, dédiée à la mémoire de la crucifixion du Christ, permet aux fidèles de s'unir au sacrifice du Sauveur tout en étant confrontés à la puissance et à la beauté de l'océan Atlantique.</p>
        <p>Le site, particulièrement apprécié pour le coucher du soleil, devient un lieu de prière naturel où la création elle-même semble louer son Créateur, offrant une expérience spirituelle unique aux visiteurs.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Statuaire & Retables -->
<div class="modal fade" id="modalStatuaire" tabindex="-1" aria-labelledby="modalStatuaireLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalStatuaireLabel">Statuaire & Retables</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>La statuaire religieuse de la Martinique témoigne d'un savoir-faire unique mêlant influences européennes et créoles. Les statues de la Vierge en bois de rose, matériau précieux local, représentent des chefs-d'œuvre d'artisanat religieux.</p>
        <p>La statue de Saint Jacques le Majeur, particulièrement vénéré lors des processions, illustre la vitalité des traditions religieuses populaires. Ces statues, souvent polychromes avec des techniques adaptées au climat tropical, sont au cœur de la dévotion populaire.</p>
        <p>Les reables, ces structures décoratives derrière les autels, combinent des motifs baroques européens avec des éléments locaux, créant un style unique qui caractérise l'art sacré martiniquais.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Orfèvrerie & Objets Liturgiques -->
<div class="modal fade" id="modalOrfevrerie" tabindex="-1" aria-labelledby="modalOrfevrerieLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalOrfevrerieLabel">Orfèvrerie & Objets Liturgiques</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Les trésors d'église de la Martinique comprennent des pièces d'orfèvrerie remarquables qui témoignent de la ferveur populaire et de la générosité des fidèles au fil des siècles.</p>
        <p>Les calices et ostensoirs, souvent en argent doré, représentent des chefs-d'œuvre d'artisanat religieux. Certaines pièces, datant des 17ème et 18ème siècles, ont été offertes par des familles fortunées ou transportées depuis la France métropolitaine.</p>
        <p>Ces objets liturgiques, utilisés lors des célébrations eucharistiques, sont non seulement des objets fonctionnels mais aussi des symboles de la présence du Christ dans la communauté, incarnant la beauté au service du sacré.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Musique sacré et tradition créole -->
<div class="modal fade" id="modalMusique" tabindex="-1" aria-labelledby="modalMusiqueLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMusiqueLabel">Musique sacré et tradition créole</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>La musique sacrée en Martinique offre un fascinant mélange entre la tradition liturgique européenne et l'âme créole locale. Des orgues Cavaillé-Coll, chefs-d'œuvre de facture française, aux rythmes du Bélè Légliz, la musique religieuse martiniquaise possède une identité unique.</p>
        <p>Le Bélè Légliz, ou "bel église", est une forme de chant religieux qui intègre des rythmes et des mélodies traditionnelles martiniquaises dans un contexte liturgique. Cette pratique, particulièrement vivante lors des fêtes patronales, témoigne de l'inculturation de la foi dans le contexte créole.</p>
        <p>Les chorales paroissiales, souvent accompagnées d'instruments locaux, créent une atmosphère musicale unique où se rejoignent la tradition universelle de l'Église et l'expression culturelle martiniquaise.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

@endsection