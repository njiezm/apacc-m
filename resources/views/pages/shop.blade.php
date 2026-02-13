@extends('layouts.app')

@section('title', 'Boutique - APACC-M')

@section('content')
<section class="py-24 px-6 max-w-6xl mx-auto">
    <div class="mb-16">
        <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 uppercase tracking-tighter">La Boutique</h2>
        <div class="w-20 h-1.5 bg-red-600 rounded-full mb-6"></div>
        <p class="text-slate-500 max-w-xl italic">Soutenez nos actions en acquérant nos ouvrages et créations originales.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
        {{-- Produit 1 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="relative h-80 overflow-hidden">
                <img src="https://picsum.photos/seed/book/600/800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                <div class="absolute top-6 right-6 bg-white/90 backdrop-blur px-4 py-2 rounded-2xl shadow-sm">
                    <span class="text-xl font-black text-slate-900">35€</span>
                </div>
            </div>
            
            <div class="p-8">
                <p class="text-[10px] font-black text-red-600 uppercase tracking-[0.2em] mb-3">Ouvrage de collection</p>
                <h3 class="text-2xl font-bold text-slate-900 mb-6 group-hover:text-red-600 transition-colors">Livre "Art chrétien créole"</h3>
                
                <a href="https://www.helloasso.com/associations/apacc-m/boutiques/livre" target="_blank" 
                   class="flex items-center justify-center gap-3 w-full bg-slate-900 text-white py-5 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-red-600 transition-all transform hover:-translate-y-1 shadow-xl shadow-slate-900/10 hover:shadow-red-600/20">
                    Commander <i class="fas fa-external-link-alt text-[10px]"></i>
                </a>
                <p class="text-center text-[10px] text-slate-400 mt-4 italic">Paiement sécurisé via HelloAsso</p>
            </div>
        </div>
        
        {{-- On peut imaginer d'autres produits ici --}}
    </div>
</section>
@endsection