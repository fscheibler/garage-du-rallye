{{--  SECTION — À propos  --}}
<section class="relative max-w-7xl mx-auto overflow-hidden lg:h-[650px] mt-24">

    {{-- WRAPPER : grille 12 colonnes (plus précis qu'un simple 50 / 50) --}}
    <div class="grid h-full grid-cols-1 lg:grid-cols-12">

        {{-- COLONNE IMAGE (≈ 60 %) --}}
        <div class="col-span-7">
            <img  src="{{ asset('images/home/about.jpg') }}"
                  alt="Le Garage"
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

                <h2 class="mb-6 text-3xl font-black uppercase">Un garage de confiance depuis plus de 20 ans</h2>

                <p class="mb-8 text-sm leading-relaxed text-[var(--color-tertiary)]">
                    Idéalement situé entre Lausanne et Neuchâtel, à proximité
                    immédiate de la sortie d'autoroute d'Yverdon…<br>
                    Roulez l'esprit tranquille, confiez votre véhicule à un garage
                    qui allie proximité, performance et qualité.
                </p>

                <x-base.button href="/le-garage" variant="primary">
                    Vers le garage
                </x-base.button>
            </div>
        </div>
    </div>
</section>
