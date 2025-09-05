@props(['blogs'])

<section class="relative bg-white font-[var(--font-sans)] overflow-hidden">
    {{-- En-tête de section --}}
    <div class="px-6 pt-24 mb-8 max-w-7xl mx-auto">
        <div class="flex items-center justify-between">
            <div class="">
                <h2 class=" text-4xl lg:text-6xl font-black uppercase text-[var(--color-secondary)] tracking-tight">
                    Nos actualités
                </h2>
                <div class="w-24 h-1 bg-[var(--color-primary)] mt-6"></div>
            </div>
            <div x-data="{}" class="hidden md:flex items-center gap-4">
                {{-- Ces boutons seront reliés au carrousel ci-dessous --}}
                <button type="button" @click="$dispatch('blog-prev')"
                    class="w-12 h-12 bg-white rounded-full border border-gray-200 hover:border-[var(--color-primary)] shadow-sm flex items-center justify-center transition">
                    <svg class="w-6 h-6 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button type="button" @click="$dispatch('blog-next')"
                    class="w-12 h-12 bg-white rounded-full border border-gray-200 hover:border-[var(--color-primary)] shadow-sm flex items-center justify-center transition">
                    <svg class="w-6 h-6 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <p class="text-lg text-gray-600 leading-relaxed mt-6 max-w-3xl">
            Conseils, actualités et informations pour bien entretenir votre véhicule
        </p>
    </div>
    @if($blogs->count() > 0)
    <div class="relative">
        <div x-data="{ 
                isHover: false,
                autoplayHandle: null,
                currentIndex: 0,
                slideCount(){ return this.$refs.scroller.querySelectorAll('[data-slide]').length },
                centerToIndex(i){
                    const sc = this.$refs.scroller;
                    const slides = sc.querySelectorAll('[data-slide]');
                    const el = slides[i];
                    if(!el) return;
                    const rect = el.getBoundingClientRect();
                    const slideW = rect.width;
                    const left = el.offsetLeft - (sc.clientWidth - slideW) / 2;
                    sc.scrollTo({ left: left, behavior: 'smooth' });
                },
                next(){
                    this.currentIndex = (this.currentIndex + 1) % this.slideCount();
                    this.centerToIndex(this.currentIndex);
                },
                prev(){
                    this.currentIndex = (this.currentIndex - 1 + this.slideCount()) % this.slideCount();
                    this.centerToIndex(this.currentIndex);
                },
                start(){
                    // center le premier au chargement
                    this.$nextTick(() => { this.centerToIndex(0) });
                    this.autoplayHandle = setInterval(() => { if(!this.isHover) this.next() }, 4000)
                },
                stop(){ if(this.autoplayHandle) clearInterval(this.autoplayHandle) }
            }" x-init="start()" class="relative px-6"
            @blog-next.window="next()" @blog-prev.window="prev()">

            {{-- Liste horizontale (carousel) --}}
            <div x-ref="scroller" class="flex gap-10 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-6 w-full select-none"
                 @mouseenter="isHover = true" @mouseleave="isHover = false"
                 @wheel.prevent="if($event.deltaY>0) next(); else prev()"
                 @mousedown="dragStart=$event.pageX; startLeft=$refs.scroller.scrollLeft; isDragging=true"
                 @mousemove.prevent="if(isDragging){ $refs.scroller.scrollLeft = startLeft - ($event.pageX - dragStart) }"
                 @mouseup="isDragging=false" @mouseleave="isDragging=false">
                {{-- Espacers invisibles à gauche pour simuler 2 articles vides --}}
                @for($i = 0; $i < 2; $i++)
                <div aria-hidden="true" class="group block shrink-0 w-[85%] md:w-[48%] lg:w-[32%] xl:w-[24%] snap-center h-[220px] md:h-[240px] lg:h-[260px] xl:h-[300px] opacity-0 pointer-events-none"></div>
                @endfor
                @foreach($blogs as $blog)
                <a data-slide href="{{ route('blog.show', $blog->slug) }}" class="group relative block shrink-0 w-[85%] md:w-[48%] lg:w-[32%] xl:w-[24%] snap-center">
                    <div class="relative overflow-hidden rounded-md h-[220px] md:h-[240px] lg:h-[260px] xl:h-[300px]">
                        @if($blog->featured_image)
                        <img src="{{ \Illuminate\Support\Str::startsWith($blog->featured_image, ['http://', 'https://', '/']) ? $blog->featured_image : (\Illuminate\Support\Str::startsWith($blog->featured_image, 'public/') ? asset(str_replace('public/', '/', $blog->featured_image)) : Storage::url($blog->featured_image)) }}"
                            alt="{{ $blog->title }}" class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)]"></div>
                        @endif
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[var(--color-primary)]"></span>
                            <span class="text-[var(--color-secondary)] text-xs font-semibold tracking-widest uppercase">
                                Actualités / {{ optional($blog->published_at)->format('d M') }}
                            </span>
                        </div>
                        <h3 class="text-xl lg:text-2xl font-black uppercase text-[var(--color-secondary)] group-hover:text-[var(--color-primary)] transition">
                            {{ $blog->title }}
                        </h3>
                        @if($blog->excerpt)
                        <p class="text-sm text-[var(--color-tertiary)] mt-2 line-clamp-2">
                            {{ $blog->excerpt }}
                        </p>
                        @endif
                    </div>
                    {{-- Overlay au survol couvrant toute la carte --}}
                    <div class="pointer-events-none absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <div class="pointer-events-none absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                        <span class="text-white uppercase tracking-widest text-sm lg:text-base font-semibold">Lire l'actualité</span>
                    </div>
                </a>
                @endforeach
            </div>
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