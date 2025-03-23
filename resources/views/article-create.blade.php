@extends('layout.main') <!-- Remplacez 'layouts.main' par le nom de votre layout -->

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-5">Nos Articles</h1>
        <div class="row">
            @if($articles->isEmpty())
                <p>Aucun article disponible.</p>
            @else
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Image de l'article -->
                        <img src="{{ $article->image_url ?? 'https://via.placeholder.com/300x200' }}" class="card-img-top" alt="{{ $article->name }}">
                        <div class="card-body">
                            <!-- Nom de l'article -->
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <!-- Description de l'article -->
                            <p class="card-text">{{ $article->description }}</p>
                            <!-- Prix cash -->
                            <p class="price-cash">Prix cash : {{ number_format($article->price, 2, ',', ' ') }} FCFA</p>
                            <!-- Prix tontine -->
                            <p class="price-tontine">Prix tontine : {{ number_format($article->tontine_price, 2, ',', ' ') }} FCFA</p>
                            <!-- Stock disponible -->
                            <p class="stock-info">Stock disponible : {{ $article->stock }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection