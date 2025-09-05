@props([
    'title',
    'subtitle' => '',
    'backgroundImage' => 'images/banners/default-banner.jpg',
    'height' => 'h-[50vh]',
    'showBreadcrumb' => true
])

{{-- BANNER INTERNE INSPIRÉ SHIFTUP --}}
<section class="relative w-full {{ $height }} overflow-hidden">
    
    {{-- Image de fond avec overlay --}}
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
         style="background-image: url('{{ asset($backgroundImage) }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>
    </div>
    
    {{-- Éléments décoratifs inspirés ShiftUp --}}
    <div class="absolute top-8 right-8 w-24 h-24 border-2 border-[var(--color-primary)]/40 rotate-45 hidden lg:block"></div>
    <div class="absolute bottom-8 left-8 w-12 h-12 bg-[var(--color-primary)]/30 transform rotate-12 hidden lg:block"></div>
    
    {{-- Pattern géométrique --}}
    <div class="absolute top-1/4 right-1/4 w-32 h-32 hidden lg:block">
        <div class="w-full h-full border border-white/20 transform rotate-45">
            <div class="w-1/2 h-1/2 border-r border-b border-white/20 m-auto mt-1/4"></div>
        </div>
    </div>
    
    {{-- Contenu --}}
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 w-full">
            
            @if($showBreadcrumb)
                {{-- Breadcrumb --}}
                <nav class="mb-6 text-sm text-white/80">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-[var(--color-primary)] transition-colors">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li class="text-[var(--color-primary)]">
                            {{ $title }}
                        </li>
                    </ol>
                </nav>
            @endif
            
            <div class="text-white max-w-4xl">
                {{-- Titre principal --}}
                <h1 class="text-4xl lg:text-6xl font-black uppercase mb-6 leading-tight">
                    {{ $title }}
                </h1>
                
                @if($subtitle)
                    {{-- Sous-titre --}}
                    <p class="text-xl lg:text-2xl font-light leading-relaxed text-gray-200 max-w-3xl">
                        {{ $subtitle }}
                    </p>
                @endif
                
                {{-- Ligne décorative --}}
                <div class="mt-8 flex items-center">
                    <div class="w-16 h-1 bg-[var(--color-primary)]"></div>
                    <div class="w-8 h-1 bg-white/50 ml-2"></div>
                    <div class="w-4 h-1 bg-white/30 ml-2"></div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Coin décoratif style ShiftUp --}}
    <div class="absolute bottom-0 right-0">
        <div class="w-32 h-32 relative">
            <div class="absolute bottom-0 right-0 w-24 h-24 bg-[var(--color-primary)]/10 transform rotate-45"></div>
            <div class="absolute bottom-2 right-2 w-16 h-16 bg-[var(--color-primary)]/20 transform rotate-45"></div>
        </div>
    </div>
</section>
