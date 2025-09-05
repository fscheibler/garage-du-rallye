@props(['blogs'])

<section class="relative bg-white font-[var(--font-sans)] overflow-hidden">
    @if($blogs->count() > 0)
    <div x-data="{
        currentSlide: 0,
        totalSlides: {{ $blogs->count() }},
        next() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        },
        prev() {
            this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
        },
        goToSlide(index) {
            this.currentSlide = index;
        }
    }" class="relative h-[600px]">
        
        {{-- Articles en carousel --}}
        <div class="relative h-full overflow-hidden">
            @foreach($blogs as $index => $blog)
            <div x-show="currentSlide === {{ $index }}" 
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 transform translate-x-full"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 transform translate-x-0"
                 x-transition:leave-end="opacity-0 transform -translate-x-full"
                 class="absolute inset-0 flex">
                
                {{-- Container gauche avec contenu --}}
                <div class="max-w-7xl mx-auto px-6 flex items-center relative z-10">
                    <div class="w-full lg:w-[38%]">
                        <div class="space-y-2 mb-4">
                            <span class="text-[var(--color-primary)] text-sm font-semibold tracking-widest uppercase">
                                ACTUALITÉS
                            </span>
                            <span class="text-[var(--color-secondary)] text-sm font-semibold tracking-widest uppercase">
                                / {{ $blog->published_at->format('d M') }}
                            </span>
                        </div>

                        <h3 class="text-4xl lg:text-5xl font-black uppercase leading-tight mb-6 text-[var(--color-secondary)]">
                            {{ $blog->title }}
                        </h3>

                        @if($blog->excerpt)
                        <p class="text-lg text-[var(--color-tertiary)] leading-relaxed mb-8 max-w-xl">
                            {{ $blog->excerpt }}
                        </p>
                        @endif

                        <x-base.button href="{{ route('blog.show', $blog->slug) }}" variant="primary">
                            Lire la suite
                        </x-base.button>
                    </div>
                </div>

                {{-- Image pleine largeur à droite --}}
                <div class="absolute right-0 top-0 h-full w-[60%] z-0">
                    @if($blog->featured_image)
                        <img src="{{ Storage::url($blog->featured_image) }}" 
                             alt="{{ $blog->title }}"
                             class="w-full h-full object-cover object-center" />
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] flex items-center justify-center">
                            <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @endif
                    
                    {{-- Dégradé gauche sur l'image --}}
                    <div class="absolute inset-0 bg-gradient-to-l from-transparent via-transparent to-white"></div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Navigation --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex items-center gap-6">
            {{-- Bouton précédent --}}
            <button @click="prev()" 
                    class="w-12 h-12 bg-white/80 hover:bg-white rounded-full flex items-center justify-center shadow-lg transition">
                <svg class="w-6 h-6 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            {{-- Indicateurs de slide --}}
            <div class="flex gap-2">
                @foreach($blogs as $index => $blog)
                <button @click="goToSlide({{ $index }})" 
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="currentSlide === {{ $index }} ? 'bg-[var(--color-primary)]' : 'bg-white/60'">
                </button>
                @endforeach
            </div>

            {{-- Bouton suivant --}}
            <button @click="next()" 
                    class="w-12 h-12 bg-white/80 hover:bg-white rounded-full flex items-center justify-center shadow-lg transition">
                <svg class="w-6 h-6 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    @else
    {{-- Message quand il n'y a pas d'articles --}}
    <div class="max-w-7xl mx-auto px-6 text-center py-16">
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
</section> 