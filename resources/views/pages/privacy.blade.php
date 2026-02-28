@extends('layouts.app')

@section('title', 'Confidentialité - APACC-M')

@section('content')
{{-- Hero Section Institutionnelle --}}

<header class="pt-32 pb-20 px-6 bg-white overflow-hidden">
<div class="max-w-4xl mx-auto text-center">
<span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8 block">Éthique & Transparence</span>

    <h1 class="font-display text-4xl md:text-6xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
        Vie <br>
        <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">Privée</span>
    </h1>
    
    <div class="w-12 h-[1px] bg-gray-200 mx-auto"></div>
</div>


</header>

<section class="pb-32 px-6">
<div class="max-w-3xl mx-auto">
<div class="space-y-24">

        {{-- Badge RGPD --}}
        <div class="bg-red-50/50 p-10 rounded-[3rem] border border-red-50 flex flex-col md:flex-row items-center gap-8">
            <div class="w-16 h-16 bg-red-900 rounded-full flex items-center justify-center text-white shrink-0 shadow-lg shadow-red-900/20">
                <i class="fas fa-shield-alt text-xl"></i>
            </div>
            <div>
                <p class="text-[9px] font-black text-red-900 uppercase tracking-[0.3em] mb-2">Engagement de Protection</p>
                <p class="text-gray-600 font-light italic leading-relaxed">
                    Conformément au <span class="text-black font-medium">RGPD</span>, nous assurons la sécurité de vos données avec la plus grande diligence. 
                    <span class="block mt-1 text-[10px] text-gray-400">Dernière mise à jour : 10 Février 2026</span>
                </p>
            </div>
        </div>

        {{-- 1. Collecte --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">01</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Collecte des données</h2>
            </div>
            
            <div class="pl-12 space-y-6">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Nous recueillons les informations nécessaires au tissage de nos liens avec vous, principalement lors de vos adhésions ou demandes de contact :
                </p>
                <ul class="grid md:grid-cols-2 gap-4">
                    <li class="flex items-center gap-4 bg-gray-50 p-5 rounded-2xl border border-gray-100/50">
                        <span class="w-1.5 h-1.5 bg-red-900 rounded-full"></span>
                        <span class="text-xs font-bold uppercase tracking-tight text-gray-900">Identité & État Civil</span>
                    </li>
                    <li class="flex items-center gap-4 bg-gray-50 p-5 rounded-2xl border border-gray-100/50">
                        <span class="w-1.5 h-1.5 bg-red-900 rounded-full"></span>
                        <span class="text-xs font-bold uppercase tracking-tight text-gray-900">Coordonnées de Contact</span>
                    </li>
                </ul>
            </div>
        </article>

        {{-- 2. Utilisation --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">02</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Finalités du traitement</h2>
            </div>
            
            <div class="pl-12 space-y-6">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Les données confiées à l'APACC-M sont exclusivement dédiées à la vie de l'association :
                </p>
                <ul class="space-y-4 pt-4">
                    <li class="flex items-start gap-4">
                        <i class="fas fa-chevron-right text-[8px] mt-2 text-red-900"></i>
                        <p class="text-sm text-gray-500 font-light italic">Suivi personnalisé de vos demandes et adhésions.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <i class="fas fa-chevron-right text-[8px] mt-2 text-red-900"></i>
                        <p class="text-sm text-gray-500 font-light italic">Diffusion de notre lettre d'information (sous réserve de consentement).</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <i class="fas fa-chevron-right text-[8px] mt-2 text-red-900"></i>
                        <p class="text-sm text-gray-500 font-light italic">Gestion sécurisée des services de notre boutique.</p>
                    </li>
                </ul>
            </div>
        </article>

        {{-- 3. Droits --}}
        <article class="group">
            <div class="flex items-center gap-6 mb-8">
                <span class="text-[10px] font-black text-red-900">03</span>
                <h2 class="text-xl font-bold uppercase tracking-widest border-b border-gray-100 pb-2 flex-grow">Vos Droits</h2>
            </div>
            
            <div class="pl-12 space-y-8">
                <p class="text-gray-500 font-light italic leading-relaxed">
                    Vous disposez d'un droit souverain d'accès, de rectification et d'effacement de vos données. Pour exercer ce droit, nous vous invitons à nous solliciter :
                </p>
                <a href="mailto:contact@apacc-m.fr" class="inline-flex items-center gap-6 bg-black text-white px-10 py-5 rounded-full hover:bg-red-900 transition-all shadow-xl shadow-black/10">
                    <i class="fas fa-envelope text-red-400"></i>
                    <span class="text-[10px] font-black uppercase tracking-[0.3em]">contact@apacc-martinique.fr</span>
                </a>
            </div>
        </article>

        {{-- Cookies --}}
        <footer class="pt-24 border-t border-gray-100">
            <div class="flex items-start gap-6">
                <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 shrink-0">
                    <i class="fas fa-cookie-bite"></i>
                </div>
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-black mb-2">Gestion des Cookies</h3>
                    <p class="text-xs text-gray-400 font-light italic leading-relaxed">
                        Ce site utilise uniquement des témoins techniques essentiels à la navigation. Aucun traçage à des fins publicitaires n'est opéré sans votre consentement explicite.
                    </p>
                </div>
            </div>
        </footer>

    </div>
</div>


</section>
@endsection