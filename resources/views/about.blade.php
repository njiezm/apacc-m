@extends('layouts.app')

@section('title', 'À propos - APACC-M')

@section('content')
<section class="py-16 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">À propos de l'APACC-M</h1>
                <p class="lead text-muted mb-4">
                    L'Association pour la Promotion de l'Art et la Culture Chrétienne en Martinique (APACC-M) est une organisation à but non lucratif dédiée à la préservation et la valorisation du patrimoine artistique et culturel chrétien de notre île.
                </p>
                <p class="text-muted mb-4">
                    Fondée en 2010, notre association regroupe des artistes, des historiens, des passionnés d'art et des membres de la communauté engagés dans la promotion de notre riche héritage culturel.
                </p>
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span>Préservation du patrimoine</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span>Formation d'artistes</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span>Événements culturels</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span>Éducation artistique</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill">
                    Nous contacter
                </a>
            </div>
            <div class="col-lg-6">
                <img src="https://picsum.photos/seed/about/600/400.jpg" alt="À propos" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 bg-primary text-white rounded-4">
                    <div class="card-body p-5 text-center">
                        <div class="display-1 mb-3">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title mb-3">Notre Mission</h3>
                        <p class="card-text">
                            Promouvoir et préserver l'art et la culture chrétienne de la Martinique à travers des expositions, des ateliers et des événements culturels.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 bg-success text-white rounded-4">
                    <div class="card-body p-5 text-center">
                        <div class="display-1 mb-3">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="card-title mb-3">Notre Vision</h3>
                        <p class="card-text">
                            Devenir la référence incontournable pour l'art et la culture chrétienne dans la Caraïbe, en créant un pont entre tradition et modernité.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 bg-warning text-white rounded-4">
                    <div class="card-body p-5 text-center">
                        <div class="display-1 mb-3">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="card-title mb-3">Nos Valeurs</h3>
                        <p class="card-text">
                            Foi, créativité, partage, respect des traditions, ouverture à l'innovation et engagement communautaire.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipe Section -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold mb-4">Notre Équipe</h2>
            <p class="lead text-muted">Les personnes qui font vivre l'association au quotidien</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <img src="https://picsum.photos/seed/person1/300/300.jpg" class="card-img-top rounded-circle p-4" alt="Membre">
                    <div class="card-body">
                        <h5 class="card-title">Pierre Dubois</h5>
                        <p class="text-muted">Président</p>
                        <p class="small">Historien de l'art, spécialiste du patrimoine religieux martiniquais.</p>
                        <div class="d-flex justify-center gap-2 mt-3">
                            <a href="#" class="text-muted"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <img src="https://picsum.photos/seed/person2/300/300.jpg" class="card-img-top rounded-circle p-4" alt="Membre">
                    <div class="card-body">
                        <h5 class="card-title">Marie-Claire Renard</h5>
                        <p class="text-muted">Directrice Artistique</p>
                        <p class="small">Artiste peintre, commissaire d'expositions indépendante.</p>
                        <div class="d-flex justify-center gap-2 mt-3">
                            <a href="#" class="text-muted"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <img src="https://picsum.photos/seed/person3/300/300.jpg" class="card-img-top rounded-circle p-4" alt="Membre">
                    <div class="card-body">
                        <h5 class="card-title">Jean-Baptiste Martin</h5>
                        <p class="text-muted">Trésorier</p>
                        <p class="small">Expert-comptable, passionné d'art et de culture.</p>
                        <div class="d-flex justify-center gap-2 mt-3">
                            <a href="#" class="text-muted"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection