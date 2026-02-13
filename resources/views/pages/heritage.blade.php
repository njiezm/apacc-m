@extends('layouts.app')

@section('title', 'Patrimoine Chrétien - APACC-M')

@section('content')
<section class="py-20 px-6 max-w-6xl mx-auto">
    <div class="mb-12">
        <h2 class="text-4xl font-extrabold text-slate-900 mb-4 uppercase tracking-tighter">Patrimoine Chrétien</h2>
        <div class="w-20 h-1.5 bg-red-600 rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-12">
        {{-- Section Églises --}}
        <div class="space-y-6">
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm hover:border-red-100 transition-colors">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center text-2xl">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Églises Historiques</h3>
                </div>
                <p class="text-slate-600 mb-8 leading-relaxed">Témoins de l'architecture coloniale et de la ferveur populaire, ces édifices sont le cœur de notre patrimoine.</p>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-4 p-4 rounded-2xl hover:bg-red-50 transition-all group">
                        <span class="text-red-600 mt-1.5 text-xs group-hover:scale-125 transition-transform">●</span>
                        <div>
                            <span class="font-bold block text-slate-900">Cathédrale Saint-Louis</span>
                            <span class="text-sm text-slate-500 italic">Fort-de-France (Structure métallique de Henri Picq)</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 p-4 rounded-2xl hover:bg-red-50 transition-all group">
                        <span class="text-red-600 mt-1.5 text-xs group-hover:scale-125 transition-transform">●</span>
                        <div>
                            <span class="font-bold block text-slate-900">Sacré-Cœur de Balata</span>
                            <span class="text-sm text-slate-500 italic">Réplique miniature de Montmartre</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 p-4 rounded-2xl hover:bg-red-50 transition-all group">
                        <span class="text-red-600 mt-1.5 text-xs group-hover:scale-125 transition-transform">●</span>
                        <div>
                            <span class="font-bold block text-slate-900">Église du Carbet</span>
                            <span class="text-sm text-slate-500 italic">L'une des plus anciennes de l'île</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Section Calvaires --}}
        <div class="space-y-6">
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm hover:border-amber-200 transition-colors">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl">
                        <i class="fas fa-cross"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Calvaires & Chemins</h3>
                </div>
                <p class="text-slate-600 mb-8 leading-relaxed">Lieux de recueillement perchés sur nos mornes, ils offrent souvent des points de vue spectaculaires sur l'île.</p>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-4 p-4 rounded-2xl hover:bg-amber-50 transition-all group">
                        <span class="text-amber-500 mt-1.5 text-xs group-hover:scale-125 transition-transform">●</span>
                        <div>
                            <span class="font-bold block text-slate-900">Chemin de Croix du Morne-Rouge</span>
                            <span class="text-sm text-slate-500 italic">Une ascension spirituelle face à la Pelée</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 p-4 rounded-2xl hover:bg-amber-50 transition-all group">
                        <span class="text-amber-500 mt-1.5 text-xs group-hover:scale-125 transition-transform">●</span>
                        <div>
                            <span class="font-bold block text-slate-900">Calvaire de Sainte-Marie</span>
                            <span class="text-sm text-slate-500 italic">Surplombant l'Atlantique</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Visites Guidées --}}
    <div class="mt-12 bg-slate-900 p-10 rounded-[3rem] border-l-8 border-red-600 shadow-2xl">
        <h3 class="text-xl font-bold text-white mb-8 flex items-center gap-3">
            <i class="fas fa-calendar-alt text-amber-500"></i> Prochaines Visites Guidées
        </h3>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl flex justify-between items-center border border-white/10 group hover:bg-white/10 transition-colors">
                <div>
                    <p class="font-bold text-white group-hover:text-amber-400 transition-colors">Circuit des Églises du Nord</p>
                    <p class="text-sm text-slate-400 italic">Samedi 15 Mars - 08:30</p>
                </div>
                <a href="{{ route('contact') }}" class="px-5 py-2 bg-red-600 text-white text-xs font-black uppercase rounded-xl hover:bg-red-700 transition-colors">S'inscrire</a>
            </div>
            <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl flex justify-between items-center border border-white/10 group hover:bg-white/10 transition-colors">
                <div>
                    <p class="font-bold text-white group-hover:text-amber-400 transition-colors">Balade Spirituelle au Diamant</p>
                    <p class="text-sm text-slate-400 italic">Dimanche 22 Mars - 09:00</p>
                </div>
                <a href="{{ route('contact') }}" class="px-5 py-2 bg-red-600 text-white text-xs font-black uppercase rounded-xl hover:bg-red-700 transition-colors">S'inscrire</a>
            </div>
        </div>
    </div>
</section>
@endsection