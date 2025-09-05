<section class="relative bg-black py-28 font-[var(--font-sans)] overflow-hidden text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Colonne gauche : Contenu textuel -->
            <div class="text-center lg:text-left lg:order-2">
                <div class="space-y-2 mb-6">
                    <span class="text-[var(--color-primary)] text-sm font-semibold tracking-widest uppercase">
                        VÉHICULES D'OCCASION
                    </span>
                    <span class="text-white text-sm font-semibold tracking-widest uppercase">
                        / CONTRÔLÉS & RÉVISÉS
                    </span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-black uppercase leading-tight mb-8 text-white">
                    Découvrez notre sélection de véhicules
                </h2>

                <p class="text-lg text-gray-300 leading-relaxed mb-10 max-w-xl">
                    Tous nos véhicules sont contrôlés, révisés et prêts à rouler. 
                    Une large gamme de véhicules d'occasion pour tous les budgets et tous les besoins.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <x-base.button href="{{ route('sales') }}" variant="primary" icon="arrow-right">
                        Voir nos véhicules
                    </x-base.button>
                </div>
            </div>

            <!-- Colonne droite : Image -->
            <div class="relative lg:order-1">
                <div class="relative bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] rounded-xl overflow-hidden">
                    <img src="/images/home/sales-car.jpg" 
                         alt="Véhicules d'occasion"
                         class="w-full h-80 object-cover opacity-90" />
                    
                    <!-- Overlay avec dégradé -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                </div>
                
                <!-- Coins décoratifs -->
                <span class="absolute -top-2 -left-2 h-4 w-4 bg-[var(--color-primary)] "></span>
                <span class="absolute -top-2 -right-2 h-4 w-4 bg-[var(--color-primary)]"></span>
                <span class="absolute -bottom-2 -left-2 h-4 w-4 bg-[var(--color-primary)]"></span>
                <span class="absolute -bottom-2 -right-2 h-4 w-4 bg-[var(--color-primary)]"></span>
            </div>
        </div>
    </div>
</section> 