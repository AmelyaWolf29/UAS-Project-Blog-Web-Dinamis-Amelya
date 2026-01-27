@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $article->title }}</h1>
            
            <div class="text-muted mb-4">
                <i class="fas fa-user"></i> {{ $article->author ?? 'Admin' }} | 
                <i class="fas fa-calendar"></i> {{ $article->created_at->format('d M Y') }}
            </div>

            @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $article->title }}">
            @endif

            <div class="article-content">
                {!! $article->content !!}
            </div>

            <hr class="my-5">
            <a href="{{ route('home') }}" class="btn btn-secondary">&larr; Kembali ke Home</a>
        </div>
    </div>
</div>
@endsection