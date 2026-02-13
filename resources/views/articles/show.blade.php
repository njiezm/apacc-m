@extends('layouts.app')

@section('title', $article->title . ' - APACC-M')

@section('content')
<!-- Hero Article -->
<section class="relative py-20 px-6 bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black/50"></div>
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover opacity-30">
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center text-white">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-medium">Article publié le {{ $article->published_at->format('d F Y') }}</span>
        </div>
        
        <div class="mb-6">
            <span class="inline-block px-4 py-2 bg-{{ $article->category_color }}-100 text-{{ $article->category_color }}-700 rounded-full text-sm font-bold mb-4">
                {{ $article->category }}
            </span>
        </div>
        
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            {{ $article->title }}
        </h1>
        
        <div class="flex items-center justify-center gap-6 text-white/80">
            <div class="flex items-center gap-2">
                <i class="far fa-user"></i>
                <span>{{ $article->author }}</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="far fa-clock"></i>
                <span>{{ $article->reading_time }} min de lecture</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="far fa-eye"></i>
                <span>{{ $article->views }} vues</span>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Article Content -->
<section class="py-16 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
        <!-- Article Meta -->
        <div class="flex flex-wrap items-center gap-4 mb-8 pb-8 border-b border-slate-200">
            <div class="flex items-center gap-3">
                <img src="https://picsum.photos/seed/author/50/50.jpg" alt="{{ $article->author }}" class="w-12 h-12 rounded-full">
                <div>
                    <div class="font-semibold text-slate-900">{{ $article->author }}</div>
                    <div class="text-sm text-slate-500">{{ $article->author_role }}</div>
                </div>
            </div>
            
            <div class="flex-1"></div>
            
            <div class="flex items-center gap-3">
                <button class="p-2 rounded-lg bg-slate-100 hover:bg-slate-200 transition-colors">
                    <i class="fas fa-share-alt text-slate-600"></i>
                </button>
                <button class="p-2 rounded-lg bg-slate-100 hover:bg-slate-200 transition-colors">
                    <i class="fas fa-bookmark text-slate-600"></i>
                </button>
                <button class="p-2 rounded-lg bg-slate-100 hover:bg-slate-200 transition-colors">
                    <i class="fas fa-print text-slate-600"></i>
                </button>
            </div>
        </div>
        
        <!-- Article Body -->
        <article class="prose prose-lg max-w-none">
            <div class="text-xl text-slate-600 leading-relaxed mb-8 font-medium">
                {{ $article->excerpt }}
            </div>
            
            <div class="space-y-6 text-slate-700 leading-relaxed">
                {!! $article->content !!}
            </div>
            
            <!-- Article Tags -->
            <div class="mt-12 pt-8 border-t border-slate-200">
                <div class="flex items-center gap-3 mb-6">
                    <i class="fas fa-tags text-slate-400"></i>
                    <span class="text-sm font-semibold text-slate-600">Tags:</span>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($article->tags as $tag)
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium hover:bg-indigo-200 transition-colors cursor-pointer">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        </article>
        
        <!-- Share Section -->
        <div class="mt-12 p-8 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-3xl">
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Partagez cet article</h3>
            <p class="text-slate-600 mb-6">Aidez-nous à diffuser cette information dans la communauté</p>
            <div class="flex flex-wrap gap-3">
                <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-colors flex items-center gap-2">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
                <a href="#" class="px-6 py-3 bg-sky-500 text-white rounded-xl font-semibold hover:bg-sky-600 transition-colors flex items-center gap-2">
                    <i class="fab fa-twitter"></i>
                    Twitter
                </a>
                <a href="#" class="px-6 py-3 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 transition-colors flex items-center gap-2">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
                <a href="#" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-semibold hover:bg-indigo-700 transition-colors flex items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    Email
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles -->
<section class="py-16 px-6 bg-slate-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Articles Similaires</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($relatedArticles as $related)
                <article class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="{{ $related->image }}" alt="{{ $related->title }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-{{ $related->category_color }}-500 text-white px-3 py-1 rounded-full text-xs font-bold">
                            {{ $related->category }}
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <i class="far fa-calendar"></i>
                            <span>{{ $related->published_at->format('d F Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">
                            {{ $related->title }}
                        </h3>
                        <p class="text-slate-600 mb-4 line-clamp-2">
                            {{ $related->excerpt }}
                        </p>
                        <a href="{{ route('articles.show', $related->slug) }}" class="inline-flex items-center gap-2 text-indigo-600 font-semibold hover:text-indigo-800 group-hover:gap-3 transition-all">
                            Lire la suite <i class="fas fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-16 px-6 bg-gradient-to-br from-indigo-600 to-purple-600">
    <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Restez Informé</h2>
        <p class="text-xl text-white/90 mb-8">
            Abonnez-vous à notre newsletter pour recevoir les dernières actualités et événements
        </p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input type="email" placeholder="Votre adresse email" class="flex-1 px-6 py-3 rounded-xl text-slate-900 placeholder-slate-500 focus:outline-none focus:ring-4 focus:ring-white/30">
            <button type="submit" class="px-8 py-3 bg-white text-indigo-600 rounded-xl font-bold hover:bg-slate-100 transition-colors">
                S'abonner
            </button>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Partage social
document.addEventListener('DOMContentLoaded', function() {
    // Boutons de partage
    const shareButtons = document.querySelectorAll('.fa-share-alt').forEach(btn => {
        btn.parentElement.addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $article->title }}',
                    text: '{{ $article->excerpt }}',
                    url: window.location.href
                });
            }
        });
    });
    
    // Bouton favori
    document.querySelector('.fa-bookmark')?.parentElement.addEventListener('click', function() {
        this.classList.toggle('bg-indigo-100');
        const icon = this.querySelector('i');
        icon.classList.toggle('fas');
        icon.classList.toggle('far');
        icon.classList.toggle('text-indigo-600');
    });
    
    // Impression
    document.querySelector('.fa-print')?.parentElement.addEventListener('click', function() {
        window.print();
    });
});
</script>
@endpush