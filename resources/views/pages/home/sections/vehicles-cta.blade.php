<section class="relative bg-white py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Colonne gauche : Contenu textuel -->
            <div class="text-center lg:text-left">
                <div class="space-y-2 mb-4">
                    <span class="text-[var(--color-primary)] text-sm font-semibold tracking-widest uppercase">
                        VÉHICULES D'OCCASION
                    </span>
                    <span class="text-[var(--color-secondary)] text-sm font-semibold tracking-widest uppercase">
                        / CONTRÔLÉS & RÉVISÉS
                    </span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-black uppercase leading-tight mb-6 text-[var(--color-secondary)]">
                    Découvrez notre sélection de véhicules
                </h2>

                <p class="text-lg text-[var(--color-tertiary)] leading-relaxed mb-8 max-w-xl">
                    Tous nos véhicules sont contrôlés, révisés et prêts à rouler. 
                    Une large gamme de véhicules d'occasion pour tous les budgets et tous les besoins.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <x-base.button href="{{ route('sales') }}" variant="primary" icon="arrow-right">
                        Voir nos véhicules
                    </x-base.button>
                    <x-base.button href="{{ route('contact') }}" variant="outline">
                        Nous contacter
                    </x-base.button>
                </div>
            </div>

            <!-- Colonne droite : Image -->
            <div class="relative">
                <div class="relative bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] rounded-xl overflow-hidden">
                    <img src="/images/home/sales-car.jpg" 
                         alt="Véhicules d'occasion"
                         class="w-full h-80 object-cover opacity-90" />
                    
                    <!-- Overlay avec dégradé -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Éléments décoratifs -->
                    <div class="absolute top-6 right-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-[var(--color-secondary)] font-bold text-sm">+50 véhicules</span>
                        </div>
                    </div>
                    
                    <div class="absolute bottom-6 left-6">
                        <div class="bg-[var(--color-primary)] text-white rounded-lg px-4 py-2">
                            <span class="font-bold text-sm">Prix attractifs</span>
                        </div>
                    </div>
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