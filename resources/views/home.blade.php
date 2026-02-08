@extends('layouts.app')

@section('title', $seo->meta_title ?? 'Home')
@section('meta_description', $seo->meta_description ?? 'Portal Informasi Terlengkap')
@section('meta_keywords', $seo->meta_keywords ?? 'berita, teknologi, viral')
@section('content')

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1200&h=500&fit=crop" alt="Technology">
                <div class="carousel-caption">
                    <h1>Teknologi Terkini 2025</h1>
                    <p>Perkembangan AI dan Machine Learning yang Mengubah Dunia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?w=1200&h=500&fit=crop" alt="Lifestyle">
                <div class="carousel-caption">
                    <h1>Gaya Hidup Sehat</h1>
                    <p>Tips dan Trik Menjalani Hidup Lebih Berkualitas</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1495020689067-958852a7765e?w=1200&h=500&fit=crop" alt="Business">
                <div class="carousel-caption">
                    <h1>Bisnis Digital</h1>
                    <p>Strategi Sukses dalam Era Digital Marketing</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

<section id="kategori" class="category-section">
    <div class="container">
        <h2 class="section-title">Kategori Blog</h2>
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{ route('category.show', $category->id) }}" class="text-decoration-none">
                    <div class="category-card">
                        <i class="fas fa-folder category-icon"></i>
                        <h4>{{ $category->name }}</h4>
                        <p class="small text-muted">{{ Str::limit(strip_tags($category->description), 100, '...')}}</p> 
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="hot-news" class="hot-news-section">
    <div class="container">
        <h2 class="section-title"><i class="fas fa-fire text-danger"></i> Hot News</h2>
            <div class="row">
                @foreach($hotNews as $article)
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card article-card">
                        <div class="article-img-wrapper">
                            <img src="{{ $article->featured_image ? asset('storage/' . $article->featured_image) : 'https://placehold.co/600x400' }}" class="card-img-top" alt="{{ $article->title }}">
                            <span class="article-badge"><i class="fas fa-fire"></i> HOT</span>
                        </div>
                        <div class="card-body">
                            <div class="article-meta">
                                <i class="fas fa-calendar"></i> {{ $article->created_at->format('d M Y') }} | 
                                <i class="fas fa-user"></i> {{ $article->author ?? 'Admin' }}
                            </div>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($article->content), 120, '...') }}</p>
                            <a href="{{ route('article.show', $article->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

<section id="latest" class="latest-section">
    <div class="container">
        <h2 class="section-title"><i class="fas fa-clock"></i> Latest Articles</h2>
        <div class="row">
            
            @foreach($latestNews as $article)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card article-card">
                    <div class="article-img-wrapper">
                        <img src="{{ $article->featured_image ? asset('storage/' . $article->featured_image) : 'https://placehold.co/600x400' }}" 
                             class="card-img-top" 
                             alt="{{ $article->title }}">
                    </div>
                    <div class="card-body">
                        <div class="article-meta">
                            <i class="fas fa-calendar"></i> {{ $article->created_at->format('d M Y') }}
                        </div>
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">
                            {{ Str::limit(strip_tags($article->content), 80, '...') }}
                        </p>
                        <a href="{{ route('article.show', $article->slug) }}" class="btn btn-outline-primary btn-sm">Baca</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Banner -->
@isset($banners)
<section id="banner" class="banner-section">
    <div class="carousel-indicators">
        @foreach($banners as $key => $banner)
        <button type="button" data-bs-slide-to="{{ $key }}" 
            class="{{ $loop->first ? 'active' : '' }}" 
            aria-current="true" 
            aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach($banners as $banner)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $banner->image_url) }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="{{ $banner->title }}">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.3);"> 
                <div class="text-center text-white p-4 rounded" style="background-color: rgba(0, 0, 0, 0.7); max-width: 700px;">
                    <h1 class="fw-bold display-5">{{ $banner->title }}</h1>
                    <p class="fs-5 mt-2">{{ $banner->subtitle }}</p>
                    @if($banner->link_url)
                    <a href="{{ $banner->link_url }}" class="btn btn-primary mt-3">Lihat Info</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
@endisset ```
@endsection