@extends('layouts.app')

@section('title', $blog->meta_title)
@section('meta_description', $blog->meta_description)

@section('content')
<article class="bg-white">
    {{-- En-tête de l'article --}}
    <div class="bg-[var(--color-secondary)] text-white py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <span class="bg-[var(--color-primary)] text-white px-4 py-2 rounded-full text-sm font-semibold">
                        {{ $blog->published_at->format('d M Y') }}
                    </span>
                </div>
                
                <h1 class="text-4xl lg:text-5xl font-black uppercase leading-tight mb-6">
                    {{ $blog->title }}
                </h1>
                
                @if($blog->excerpt)
                <p class="text-lg text-gray-300 leading-relaxed max-w-2xl mx-auto">
                    {{ $blog->excerpt }}
                </p>
                @endif
            </div>
        </div>
    </div>

    {{-- Image à la une --}}
    @if($blog->featured_image)
    <div class="relative h-96 lg:h-[500px] overflow-hidden">
        <img src="{{ \Illuminate\Support\Str::startsWith($blog->featured_image, ['http://', 'https://', '/']) ? $blog->featured_image : (\Illuminate\Support\Str::startsWith($blog->featured_image, 'public/') ? asset(str_replace('public/', '/', $blog->featured_image)) : Storage::url($blog->featured_image)) }}" 
             alt="{{ $blog->title }}"
             class="w-full h-full object-cover">
    </div>
    @endif

    {{-- Contenu de l'article --}}
    <div class="py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg max-w-none text-[var(--color-secondary)]">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Navigation --}}
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-6">
                <a href="{{ route('blog') }}" 
                   class="inline-flex items-center text-[var(--color-primary)] font-semibold hover:text-[#e0431f] transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Retour aux actualités
                </a>

                <div class="flex gap-4">
                    {{-- Boutons de partage --}}
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                       target="_blank"
                       class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" 
                       target="_blank"
                       class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                       target="_blank"
                       class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>

<style>
.prose {
    color: var(--color-secondary);
}

.prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
    color: var(--color-secondary);
    font-weight: 700;
    text-transform: uppercase;
}

.prose h2 {
    font-size: 2rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.prose h3 {
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.prose p {
    margin-bottom: 1.5rem;
    line-height: 1.7;
    color: var(--color-tertiary);
}

.prose a {
    color: var(--color-primary);
    text-decoration: none;
    font-weight: 600;
}

.prose a:hover {
    color: #e0431f;
}

.prose ul, .prose ol {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}

.prose li {
    margin-bottom: 0.5rem;
    color: var(--color-tertiary);
}

.prose blockquote {
    border-left: 4px solid var(--color-primary);
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: var(--color-tertiary);
}

.prose img {
    border-radius: 0.5rem;
    margin: 2rem 0;
}
</style>
@endsection 