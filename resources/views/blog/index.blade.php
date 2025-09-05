@extends('layouts.app')

@section('title', 'Blog - Actualités & Conseils')

@section('content')
<div class="bg-[var(--color-secondary)] text-white py-24">
    <div class="container mx-auto px-6 text-center">
        <span class="text-[var(--color-primary)] text-sm font-semibold tracking-widest uppercase mb-4 block">
            Actualités & Conseils
        </span>
        
        <h1 class="text-5xl lg:text-6xl font-black uppercase leading-tight mb-6">
            Notre Blog
        </h1>
        
        <p class="text-lg text-gray-300 leading-relaxed max-w-2xl mx-auto">
            Découvrez nos derniers articles, conseils d'entretien et actualités automobiles pour prendre soin de votre véhicule.
        </p>
    </div>
</div>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        @if($blogs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach($blogs as $blog)
            <article class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                {{-- Image --}}
                <div class="relative h-48 bg-gray-200 overflow-hidden">
                    @if($blog->featured_image)
                        <img src="{{ Storage::url($blog->featured_image) }}" 
                             alt="{{ $blog->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] flex items-center justify-center">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @endif
                    
                    {{-- Date en overlay --}}
                    <div class="absolute top-4 left-4">
                        <div class="bg-[var(--color-primary)] text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $blog->published_at->format('d M Y') }}
                        </div>
                    </div>
                </div>

                {{-- Contenu --}}
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-3 text-[var(--color-secondary)] leading-tight">
                        {{ $blog->title }}
                    </h2>
                    
                    @if($blog->excerpt)
                    <p class="text-[var(--color-tertiary)] leading-relaxed mb-4 line-clamp-3">
                        {{ $blog->excerpt }}
                    </p>
                    @endif
                    
                    <a href="{{ route('blog.show', $blog->slug) }}" 
                       class="inline-flex items-center text-[var(--color-primary)] font-semibold hover:text-[#e0431f] transition-colors">
                        Lire la suite
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center">
            {{ $blogs->links() }}
        </div>
        @else
        {{-- Message quand il n'y a pas d'articles --}}
        <div class="text-center py-16">
            <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-[var(--color-secondary)] mb-3">
                Aucun article pour le moment
            </h2>
            <p class="text-[var(--color-tertiary)]">
                Nos premiers articles arrivent bientôt !
            </p>
        </div>
        @endif
    </div>
</section>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection 