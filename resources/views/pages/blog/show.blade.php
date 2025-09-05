@extends('layouts.app')

@section('title', $blog->meta_title)

@section('content')

<x-banners.internal-page-banner 
    title="{{ $blog->title }}" 
    subtitle="{{ $blog->excerpt }}"
    background-image="{{ $blog->featured_image_url ?: 'images/blog/blog-banner.jpg' }}"
    height="h-[45vh]"
    :showBreadcrumb="true"
/>

<section class="relative py-16 bg-white font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-4xl mx-auto px-6">
        <div class="prose prose-lg max-w-none">
            {!! $blog->content !!}
        </div>
    </div>
</section>

@endsection 


