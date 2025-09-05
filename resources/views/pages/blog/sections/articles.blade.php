@props(['blogs'])

{{-- SECTION ARTICLES BLOG STYLE SHIFTUP --}}
<section class="relative py-20 bg-white overflow-hidden">
    
    {{-- Éléments décoratifs carrés ShiftUp --}}
    <div class="absolute top-12 left-12 w-20 h-20 bg-[var(--color-primary)]/10 transform rotate-45"></div>
    <div class="absolute bottom-12 right-12 w-32 h-32 border-2 border-[var(--color-secondary)]/20 transform rotate-45"></div>
    <div class="absolute top-1/3 right-1/3 w-12 h-12 bg-[var(--color-primary)]/5"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative">
        
        @if($blogs->count() > 0)
            {{-- Titre de section --}}
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-6xl font-black uppercase text-[var(--color-secondary)] mb-8 tracking-tight">
                    Nos actualités
                </h2>
                <div class="w-24 h-1 bg-[var(--color-primary)] mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Conseils, actualités et informations pour bien entretenir votre véhicule
                </p>
            </div>
            
            {{-- Grille des articles --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="block group">
                        <article class="bg-white shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:scale-105">
                            {{-- Image de l'article --}}
                            <div class="relative overflow-hidden">
                                @if($blog->featured_image)
                                    <img src="{{ $blog->featured_image_url }}" 
                                         alt="{{ $blog->title }}"
                                         class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" />
                                @else
                                    <div class="w-full h-48 bg-[var(--color-primary)] flex items-center justify-center relative overflow-hidden">
                                        {{-- Éléments décoratifs carrés --}}
                                        <div class="absolute top-2 right-2 w-8 h-8 border border-white/40 group-hover:rotate-45 transition-transform duration-300"></div>
                                        <div class="absolute bottom-2 left-2 w-6 h-6 bg-white/20 group-hover:scale-125 transition-transform duration-300"></div>
                                        <div class="w-16 h-16 bg-white flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-[var(--color-primary)]" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                @endif
                                
                                {{-- Badge catégorie --}}
                                <div class="absolute top-4 left-4">
                                    <div class="bg-[var(--color-primary)] text-white px-3 py-1 text-xs font-black uppercase tracking-wide group-hover:bg-[var(--color-secondary)] transition-colors duration-300">
                                        Actualités
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6">
                                {{-- Date et informations --}}
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-3 h-3 bg-[var(--color-primary)] mr-2 group-hover:bg-[var(--color-secondary)] transition-colors duration-300"></div>
                                    <span class="font-medium">{{ $blog->published_at->format('d M Y') }}</span>
                                </div>
                                
                                {{-- Titre --}}
                                <h3 class="text-xl font-black uppercase text-[var(--color-secondary)] mb-4 leading-tight tracking-wide group-hover:text-[var(--color-primary)] transition-colors duration-300">
                                    {{ $blog->title }}
                                </h3>
                                
                                {{-- Extrait --}}
                                @if($blog->excerpt)
                                    <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed text-sm">
                                        {{ $blog->excerpt }}
                                    </p>
                                @endif
                                
                                {{-- Lien de lecture --}}
                                <div class="flex items-center justify-between">
                                    <div class="inline-flex items-center text-[var(--color-primary)] font-black uppercase text-sm tracking-wide group-hover:text-[var(--color-secondary)] transition-colors duration-300">
                                        Lire l'article
                                        <div class="w-4 h-4 bg-[var(--color-primary)] ml-2 flex items-center justify-center group-hover:bg-[var(--color-secondary)] group-hover:translate-x-1 transition-all duration-300">
                                            <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    {{-- Temps de lecture estimé --}}
                                    <span class="text-xs text-gray-400 flex items-center font-medium">
                                        <div class="w-2 h-2 bg-gray-400 mr-1 group-hover:bg-[var(--color-primary)] transition-colors duration-300"></div>
                                        3 min
                                    </span>
                                </div>
                            </div>
                        </article>
                    </a>
                @endforeach
            </div>
            
            
        @else
            {{-- État vide --}}
            <div class="text-center py-20">
                <div class="w-24 h-24 mx-auto mb-8 bg-[var(--color-primary)] flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-black uppercase text-[var(--color-secondary)] mb-6 tracking-wide">
                    Nos premiers articles arrivent bientôt
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Nous préparons pour vous des contenus de qualité : conseils d'entretien, 
                    actualités du secteur automobile, et astuces pour votre véhicule.
                </p>
                <a href="/contact" class="inline-block bg-[var(--color-primary)] text-white px-8 py-4 font-black uppercase tracking-wide hover:bg-[var(--color-secondary)] transition-colors">
                    Nous contacter
                </a>
            </div>
        @endif
    </div>
</section> 