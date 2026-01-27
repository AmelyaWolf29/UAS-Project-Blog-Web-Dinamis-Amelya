<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Banner;   
use App\Models\CategoryBlog;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->latest()->take(3)->get();
        $categories = CategoryBlog::latest()->take(4)->get();
        $hotNews = Article::latest()->take(2)->get();
        $latestNews = Article::latest()->get();
        return view('home', compact('banners','categories','hotNews', 'latestNews'));
    }

    public function category(CategoryBlog $category)
    {
        $banners = Banner::where('is_active', true)->get(); 
        $articles = Article::where('category_blog_id', $category->id)->latest()->get();
        return view('category', compact('articles', 'category', 'banners'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('detail', compact('article'));
    }

}
