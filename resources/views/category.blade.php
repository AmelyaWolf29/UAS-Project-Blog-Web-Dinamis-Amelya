@extends('layouts.app') 

@section('title', 'Kategori ' . $category->name)

@section('content')
<div class="container mt-5 pt-5 text-center">
    <h1 class="fw-bold">Kategori: {{ $category->name }}</h1>
    <p class="text-muted fs-5">{{ $category->description }}</p>
    <hr class="my-4 w-25 mx-auto">
</div>

<section class="py-4">
    <div class="container">
        <div class="row">
            @forelse($articles as $article)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $article->featured_image ? asset('storage/' . $article->featured_image) : 'https://placehold.co/600x400' }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $article->title }}">
                        
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text text-secondary">
                            {{ Str::limit(strip_tags($article->content), 80) }}
                        </p>
                        <a href="{{ route('article.show', $article->slug) }}" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="alert alert-secondary d-inline-block">
                    <i class="fas fa-info-circle me-2"></i> 
                    Belum ada artikel di kategori <strong>{{ $category->name }}</strong>.
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection