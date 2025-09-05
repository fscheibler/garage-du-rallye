{{-- SECTION HERO BANNER --}}
<section class="relative w-full h-[75vh] overflow-hidden">
    
    {{-- Image de fond avec overlay --}}
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
         style="background-image: url('/images/home/slide2.jpg');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>
    </div>
    
    {{-- Contenu principal --}}
    <div class="relative z-10 h-full flex items-center">
        <div class="w-full max-w-7xl mx-auto px-6">
            
            {{-- Contenu centré --}}
            <div class="text-center text-white">
                {{-- Sur-titre discret inspiré ShiftUp --}}
                <div class="flex justify-center mb-6">
                    <span class="inline-flex items-center gap-3 text-xs tracking-[0.2em] uppercase text-white/80">
                        <span class="inline-block w-10 h-[2px] bg-[var(--color-primary)]"></span>
                        Entretien & Services Auto
                    </span>
                </div>
                
                {{-- Titre principal --}}
                <h1 class="text-6xl lg:text-8xl font-black uppercase mb-8 leading-tight">
                    <span class="block text-white">Garage du</span>
                    <span class="block text-[var(--color-primary)]">Rallye</span>
                </h1>
                
                {{-- Sous-titre --}}
                <p class="text-xl lg:text-3xl font-light leading-relaxed text-gray-200 max-w-4xl mx-auto">
                    Votre partenaire automobile de confiance depuis plus de 25 ans
                </p>
                
            </div>
        </div>
    </div>
    
    {{-- Indicateur de défilement discret --}}
    <a href="#next-section" class="absolute bottom-6 left-1/2 transform -translate-x-1/2">
        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center opacity-70 hover:opacity-100 transition-opacity">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>
    </a>
</section>

