@props(['blogs'])

<section class="relative bg-white font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        @if($blogs->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($blogs as $blog)
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                        @if($blog->featured_image)
                            <img src="{{ Storage::url($blog->featured_image) }}" 
                                 alt="{{ $blog->title }}"
                                 class="w-full h-48 object-cover" />
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="text-[var(--color-primary)] font-semibold">ACTUALITÉS</span>
                                <span class="mx-2">•</span>
                                <span>{{ $blog->published_at->format('d M Y') }}</span>
                            </div>
                            
                            <h3 class="text-xl font-bold text-[var(--color-secondary)] mb-3">
                                {{ $blog->title }}
                            </h3>
                            
                            @if($blog->excerpt)
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ $blog->excerpt }}
                                </p>
                            @endif
                            
                            <a href="{{ route('blog.show', $blog->slug) }}" 
                               class="inline-flex items-center text-[var(--color-primary)] font-semibold hover:underline">
                                Lire la suite
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-[var(--color-secondary)] mb-3">
                    Aucun article pour le moment
                </h3>
                <p class="text-[var(--color-tertiary)]">
                    Nos premiers articles arrivent bientôt !
                </p>
            </div>
        @endif
    </div>
</section> 