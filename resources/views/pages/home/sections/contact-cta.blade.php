<section class="relative bg-[#f4f5f7] py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Colonne gauche : Image -->
            <div class="relative">
                <div class="relative bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] rounded-xl overflow-hidden">
                    <img src="/images/home/contact.jpg" 
                         alt="Contactez-nous"
                         class="w-full h-80 object-cover opacity-90" />
                    
                    <!-- Overlay avec dégradé -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Éléments décoratifs -->
                    <div class="absolute top-6 right-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-[var(--color-secondary)] font-bold text-sm">Rapidité</span>
                        </div>
                    </div>
                    
                    <div class="absolute bottom-6 left-6">
                        <div class="bg-[var(--color-primary)] text-white rounded-lg px-4 py-2">
                            <span class="font-bold text-sm">Expertise</span>
                        </div>
                    </div>
                </div>
                
                <!-- Coins décoratifs -->
                <span class="absolute -top-2 -left-2 h-4 w-4 bg-[var(--color-primary)] rounded-full"></span>
                <span class="absolute -top-2 -right-2 h-4 w-4 bg-[var(--color-primary)] rounded-full"></span>
                <span class="absolute -bottom-2 -left-2 h-4 w-4 bg-[var(--color-primary)] rounded-full"></span>
                <span class="absolute -bottom-2 -right-2 h-4 w-4 bg-[var(--color-primary)] rounded-full"></span>
            </div>

            <!-- Colonne droite : Contenu textuel -->
            <div class="text-center lg:text-left text-white">
                <div class="space-y-2 mb-4">
                    <span class="text-[var(--color-primary)] text-sm font-semibold tracking-widest uppercase">
                        CONTACTEZ-NOUS
                    </span>
                    <span class="text-white text-sm font-semibold tracking-widest uppercase">
                        / RAPIDITÉ & EXPERTISE
                    </span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-black uppercase leading-tight mb-6">
                    Besoin d'un rendez-vous ?
                </h2>

                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-xl">
                    Notre équipe est à votre disposition pour toute question, demande de devis ou prise de rendez-vous. 
                    Nous vous répondons rapidement et avec professionnalisme.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <x-base.button href="tel:+41221234567" variant="primary">
                        📞 022 123 45 67
                    </x-base.button>
                    <x-base.button href="{{ route('contact') }}" variant="outline">
                        ✉️ Nous écrire
                    </x-base.button>
                </div>

                <!-- Points clés -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-12">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-white mb-1">Rapide</h4>
                        <p class="text-sm text-gray-300">Réponse sous 24h</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-white mb-1">Sécurisé</h4>
                        <p class="text-sm text-gray-300">Données protégées</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-white mb-1">Expert</h4>
                        <p class="text-sm text-gray-300">Équipe qualifiée</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 