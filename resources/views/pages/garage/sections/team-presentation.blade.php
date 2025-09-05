{{-- SECTION PRÉSENTATION ÉQUIPE STYLE SHIFTUP --}}
<section class="relative py-24 bg-gray-50 overflow-hidden">
    
    {{-- Éléments décoratifs carrés --}}
    <div class="absolute top-16 left-16 w-20 h-20 bg-[var(--color-primary)]/10 transform rotate-45"></div>
    <div class="absolute bottom-16 right-16 w-32 h-32 border-2 border-[var(--color-secondary)]/15 transform rotate-45"></div>
    <div class="absolute top-1/3 right-1/3 w-12 h-12 bg-[var(--color-primary)]/5"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative">
        
        {{-- En-tête de section --}}
        <div class="text-center mb-20">
            <h2 class="text-4xl lg:text-6xl font-black uppercase text-[var(--color-secondary)] mb-8 tracking-tight">
                Notre Équipe d'Experts
            </h2>
            <div class="w-24 h-1 bg-[var(--color-primary)] mx-auto mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Des professionnels passionnés et certifiés qui mettent leur expertise et leur savoir-faire 
                au service de votre véhicule. Chaque membre de notre équipe est spécialisé dans son domaine.
            </p>
        </div>
        
        {{-- Grille des membres de l'équipe --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            
            {{-- Membre 1 - Directeur/Fondateur --}}
            <div class="group relative bg-white shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    {{-- Image de profil --}}
                    <img src="{{ asset('images/profile.jpg') }}" alt="Jean-Pierre Dubois" class="w-full h-full object-cover">
                    {{-- Overlay sombre --}}
                    <div class="absolute inset-0 bg-black/20"></div>
                    {{-- Éléments décoratifs carrés --}}
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/60"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-[var(--color-primary)]/80"></div>
                </div>
                
                <div class="relative bg-white p-8">
                    
                    <h3 class="text-xl font-black uppercase mb-2 mt-4 tracking-wide text-[var(--color-secondary)]">
                        Jean-Pierre Dubois
                    </h3>
                    <p class="text-sm text-[var(--color-primary)] font-bold mb-4 uppercase tracking-wide">Fondateur & Directeur</p>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6">
                        Passionné d'automobile depuis 30 ans, expert en diagnostic et spécialiste des véhicules de sport.
                    </p>
                </div>
            </div>
            
            {{-- Membre 2 - Mécanicien senior --}}
            <div class="group relative bg-white shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    {{-- Image de profil --}}
                    <img src="{{ asset('images/profile.jpg') }}" alt="Marc Rousseau" class="w-full h-full object-cover">
                    {{-- Overlay sombre --}}
                    <div class="absolute inset-0 bg-black/20"></div>
                    {{-- Éléments décoratifs carrés --}}
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/60"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-[var(--color-secondary)]/80"></div>
                </div>
                
                <div class="relative bg-white p-8">
                    
                    <h3 class="text-xl font-black uppercase mb-2 mt-4 tracking-wide text-[var(--color-secondary)]">
                        Marc Rousseau
                    </h3>
                    <p class="text-sm text-[var(--color-primary)] font-bold mb-4 uppercase tracking-wide">Mécanicien Senior</p>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6">
                        Expert en mécanique générale et diagnostic électronique, notre référence pour les réparations complexes.
                    </p>
                    
                </div>
            </div>
            
            {{-- Membre 3 - Spécialiste pneus --}}
            <div class="group relative bg-white shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    {{-- Image de profil --}}
                    <img src="{{ asset('images/profile.jpg') }}" alt="Sophie Martin" class="w-full h-full object-cover">
                    {{-- Overlay sombre --}}
                    <div class="absolute inset-0 bg-black/20"></div>
                    {{-- Éléments décoratifs carrés --}}
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/60"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-[var(--color-primary)]/80"></div>
                </div>
                
                <div class="relative bg-white p-8">
                    
                    <h3 class="text-xl font-black uppercase mb-2 mt-4 tracking-wide text-[var(--color-secondary)]">
                        Sophie Martin
                    </h3>
                    <p class="text-sm text-[var(--color-primary)] font-bold mb-4 uppercase tracking-wide">Pneus & Géométrie</p>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6">
                        Spécialiste Pneus & Géométrie. Experte pour optimiser la tenue de route et la sécurité de votre véhicule.
                    </p>
                </div>
            </div>
        </div>
        
        {{-- Section valeurs de l'équipe --}}
        <div class="relative bg-[var(--color-primary)] p-8 md:p-12 shadow-xl overflow-hidden">
            
            <div class="text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-black uppercase text-white mb-6">Nos valeurs</h3>
                <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                <p class="text-white/90 max-w-3xl mx-auto leading-relaxed">
                    L'esprit d'équipe et le professionnalisme sont au cœur de notre approche. 
                    Chaque membre apporte son expertise pour vous garantir un service d'excellence et une relation de confiance durable.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Valeur 1 --}}
                <div class="group text-center">
                    <div class="w-20 h-20 bg-white flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Expertise</h4>
                    <p class="text-sm text-white/80 leading-relaxed">
                        Formation continue et certification pour rester à la pointe des technologies automobiles et vous offrir le meilleur service.
                    </p>
                </div>
                
                {{-- Valeur 2 --}}
                <div class="group text-center">
                    <div class="w-20 h-20 bg-white flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Passion</h4>
                    <p class="text-sm text-white/80 leading-relaxed">
                        L'amour de l'automobile guide chacune de nos interventions pour votre satisfaction et la longévité de votre véhicule.
                    </p>
                </div>
                
                {{-- Valeur 3 --}}
                <div class="group text-center">
                    <div class="w-20 h-20 bg-white flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Proximité</h4>
                    <p class="text-sm text-white/80 leading-relaxed">
                        Relation de confiance et conseil personnalisé pour répondre à tous vos besoins avec écoute et disponibilité.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
