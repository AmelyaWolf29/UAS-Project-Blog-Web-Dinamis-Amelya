@extends('layouts.app')

@section('meta_title', $article->meta_title ? $article->meta_title : $article->title)
@section('meta_description', $article->meta_description)
@section('meta_keywords', $article->meta_keywords)

@section('title', $article->title)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $article->title }}</h1>
            @if($article->meta_description)
            <h3 class="lead text-muted mb-4 fst-italic">{{ $article->meta_description }}</h3>
            @endif
            <div class="text-muted mb-4">
                <i class="fas fa-user"></i> {{ $article->author ?? 'Admin' }} | 
                <i class="fas fa-calendar"></i> {{ $article->created_at->format('d M Y') }}
            </div>

            @if($article->featured_image)
            <img src="{{ asset('storage/' . $article->featured_image) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $article->title }}">
            @endif

            <div class="article-content">
                {!! $article->content !!}
            </div>

            @if($article->meta_keywords)
            <div class="mt-4">
                <strong>Tags:</strong>
                @foreach(explode(',', $article->meta_keywords) as $keyword)
                <span class="badge bg-secondary me-1">{{ trim($keyword) }}</span>
                @endforeach
            </div>
            @endif
            
            <hr class="my-5">
            <a href="{{ route('home') }}" class="btn btn-secondary">&larr; Kembali ke Home</a>
        </div>
    </div>
</div>
@endsection