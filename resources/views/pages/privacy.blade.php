@extends('layouts.app')

@section('title', 'Confidentialité - APACC-M')

@section('content')
<section class="relative pt-32 pb-16 bg-slate-950">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter">Vie <span class="text-red-600">Privée</span></h1>
        <div class="w-16 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
    </div>
</section>

<section class="py-20 px-6 max-w-4xl mx-auto">
    <div class="space-y-12 text-slate-600 leading-relaxed">
        
        <div class="bg-red-50 p-8 rounded-[2.5rem] border border-red-100 flex flex-col md:flex-row items-center gap-6">
            <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white shrink-0">
                <i class="fas fa-shield-alt text-2xl"></i>
            </div>
            <div>
                <p class="font-black text-red-900 uppercase tracking-widest text-xs mb-1">Dernière mise à jour</p>
                <p class="text-red-800 font-bold">10 Février 2026</p>
                <p class="text-red-700/70 text-sm mt-1">Conformité au Règlement Général sur la Protection des Données (RGPD).</p>
            </div>
        </div>

        {{-- Section 01 --}}
        <div class="group">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-4xl font-black text-slate-100 group-hover:text-red-100 transition-colors">01</span>
                <h2 class="text-xl font-black text-slate-900 uppercase tracking-tight">Collecte des données</h2>
            </div>
            <div class="pl-12">
                <p>Nous collectons des informations lorsque vous utilisez nos services de contact ou d'adhésion. Les données incluent :</p>
                <ul class="grid md:grid-cols-2 gap-4 mt-6">
                    <li class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100">
                        <i class="fas fa-check text-red-600 text-xs"></i> Identité (Nom, Prénom)
                    </li>
                    <li class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100">
                        <i class="fas fa-check text-red-600 text-xs"></i> Contact (E-mail, Téléphone)
                    </li>
                </ul>
            </div>
        </div>

        {{-- Section 02 --}}
        <div class="group">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-4xl font-black text-slate-100 group-hover:text-red-100 transition-colors">02</span>
                <h2 class="text-xl font-black text-slate-900 uppercase tracking-tight">Utilisation des données</h2>
            </div>
            <div class="pl-12">
                <p>Les informations recueillies sont exclusivement destinées à l'APACC-M pour :</p>
                <ul class="list-disc ml-4 mt-4 space-y-2 marker:text-red-600">
                    <li>La gestion de vos demandes de contact.</li>
                    <li>L'envoi de lettres d'information (si consentement activé).</li>
                    <li>Le traitement de vos commandes en boutique.</li>
                </ul>
            </div>
        </div>

        {{-- Section 03 --}}
        <div class="group">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-4xl font-black text-slate-100 group-hover:text-red-100 transition-colors">03</span>
                <h2 class="text-xl font-black text-slate-900 uppercase tracking-tight">Vos Droits</h2>
            </div>
            <div class="pl-12">
                <p>Vous disposez d'un droit d'accès, de rectification et de suppression de vos données. Pour toute demande, veuillez nous contacter :</p>
                <div class="mt-6 inline-flex items-center gap-4 bg-slate-900 text-white px-8 py-4 rounded-2xl shadow-xl shadow-slate-900/10">
                    <i class="fas fa-envelope text-red-500"></i>
                    <span class="font-bold tracking-wider">contact@apacc-martinique.org</span>
                </div>
            </div>
        </div>

        {{-- Section Cookies --}}
        <div class="pt-12 border-t border-slate-100">
            <h2 class="text-xl font-black text-slate-900 mb-4 uppercase tracking-widest flex items-center gap-3 italic">
                <i class="fas fa-cookie-bite text-amber-500"></i>
                Gestion des Cookies
            </h2>
            <p class="text-sm">Ce site utilise uniquement des cookies techniques nécessaires à la navigation. Aucun traçage publicitaire n'est effectué sans votre accord explicite.</p>
        </div>
    </div>
</section>
@endsection