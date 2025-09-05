{{-- SECTION PRÉSENTATION GARAGE --}}
<section class="relative max-w-7xl mx-auto overflow-hidden lg:h-[650px] mt-24">
    
    {{-- WRAPPER : grille 12 colonnes --}}
    <div class="grid h-full grid-cols-1 lg:grid-cols-12">
            
        {{-- COLONNE IMAGE (≈ 60 %) --}}
        <div class="col-span-7">
            <img src="{{ asset('images/home/garage-interior.jpg') }}"
                 alt="Intérieur du garage"
                 class="h-2/3 w-full object-cover" />
        </div>
        {{-- COLONNE TEXTE (≈ 40 %) --}}
        <div class="relative col-span-5 flex items-center">

            {{-- Décalage négatif pour chevauchement --}}
            <div class="relative lg:-ml-24 bg-[var(--color-secondary)] px-12 py-14 text-white
                        w-full max-w-none">

                {{-- Coins orange --}}
                <span class="absolute -top-[6px]  -left-[6px]   h-2 w-2 bg-[var(--color-primary)]"></span>
                <span class="absolute -top-[6px]  -right-[6px]  h-2 w-2 bg-[var(--color-primary)]"></span>
                <span class="absolute -bottom-[6px] -left-[6px]  h-2 w-2 bg-[var(--color-primary)]"></span>
                <span class="absolute -bottom-[6px] -right-[6px] h-2 w-2 bg-[var(--color-primary)]"></span>

                <h2 class="mb-6 text-3xl font-black uppercase">L'excellence automobile depuis 1999</h2>

                <p class="mb-8 text-sm leading-relaxed text-[var(--color-tertiary)]">
                    Situé au cœur de la région, le Garage du Rallye s'est imposé comme une référence 
                    dans l'entretien et la réparation automobile.<br>
                    Notre passion pour l'automobile nous pousse à offrir des services de qualité supérieure.
                </p>

                <x-base.button href="#services" variant="primary">
                    Découvrir nos services
                </x-base.button>
            </div>
        </div>
    </div>
</section>
