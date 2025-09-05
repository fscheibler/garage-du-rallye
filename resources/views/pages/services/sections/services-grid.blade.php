{{-- SECTION SERVICES STYLE SHIFTUP --}}
<section class="py-20 bg-white relative overflow-hidden">
    
    {{-- Éléments décoratifs carrés ShiftUp --}}
    <div class="absolute top-12 left-12 w-20 h-20 bg-[var(--color-primary)]/10 transform rotate-45"></div>
    <div class="absolute bottom-12 right-12 w-32 h-32 border-2 border-[var(--color-secondary)]/20 transform rotate-45"></div>
    <div class="absolute top-1/2 right-1/4 w-12 h-12 bg-[var(--color-primary)]/5"></div>
    <div class="absolute bottom-1/4 left-1/4 w-16 h-16 border border-[var(--color-secondary)]/10 transform rotate-12"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative">
        
        {{-- Titre de section --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-6xl font-black uppercase text-[var(--color-secondary)] mb-8 tracking-tight">
                Notre expertise à votre service
            </h2>
            <div class="w-24 h-1 bg-[var(--color-primary)] mx-auto mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Des interventions de routine aux réparations complexes, notre équipe d'experts 
                vous accompagne pour maintenir votre véhicule en parfait état.
            </p>
        </div>
        
        {{-- Grille des services --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
            {{-- Service 1: Entretien --}}
            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-[var(--color-primary)] overflow-hidden">
                    {{-- Éléments décoratifs carrés --}}
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/40"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-white/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white flex items-center justify-center">
                            <svg class="w-12 h-12 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-black uppercase text-[var(--color-secondary)] mb-4 tracking-wide">
                        Entretien & Révision
                    </h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Entretien complet selon les préconisations constructeur pour maintenir les performances 
                        et la fiabilité de votre véhicule.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Vidange huile et filtres</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Révision complète</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Maintenance préventive</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Contrôle technique</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 2: Diagnostic --}}
            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-[var(--color-secondary)] overflow-hidden">
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/40"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-white/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white flex items-center justify-center">
                            <svg class="w-12 h-12 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-black uppercase text-[var(--color-secondary)] mb-4 tracking-wide">
                        Diagnostic & Réparation
                    </h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Diagnostic précis et réparation efficace avec nos équipements de pointe. 
                        Identification rapide des problèmes et solutions adaptées.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Diagnostic électronique</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Réparation moteur</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Système de freinage</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Climatisation</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 3: Pneus --}}
            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-[var(--color-primary)] overflow-hidden">
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/40"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-white/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white flex items-center justify-center">
                            <svg class="w-12 h-12 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-black uppercase text-[var(--color-secondary)] mb-4 tracking-wide">
                        Pneus & Géométrie
                    </h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Service complet de pneus et réglage de géométrie pour optimiser 
                        votre tenue de route et prolonger la durée de vie de vos pneus.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Montage et équilibrage</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Réparation de pneus</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Géométrie et alignement</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Stockage saisonnier</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 4: Carrosserie --}}
            <div class="bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-[var(--color-secondary)] overflow-hidden">
                    <div class="absolute top-4 right-4 w-12 h-12 border-2 border-white/40"></div>
                    <div class="absolute bottom-4 left-4 w-8 h-8 bg-white/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white flex items-center justify-center">
                            <svg class="w-12 h-12 text-[var(--color-secondary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h10a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-black uppercase text-[var(--color-secondary)] mb-4 tracking-wide">
                        Carrosserie & Peinture
                    </h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Remise en état de votre carrosserie avec des techniques professionnelles 
                        et des peintures de qualité pour un résultat impeccable.
                    </p>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Réparation collision</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Peinture et vernis</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Débosselage sans peinture</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-[var(--color-primary)] mr-3"></div>
                            <span class="text-sm text-gray-700 font-medium">Gestion assurance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Section informations complémentaires --}}
        <div class="bg-gray-50 p-8 relative overflow-hidden">
            {{-- Éléments décoratifs --}}
            <div class="absolute top-4 right-4 w-16 h-16 bg-[var(--color-primary)]/10 transform rotate-45"></div>
            <div class="absolute bottom-4 left-4 w-12 h-12 border border-[var(--color-secondary)]/15 transform rotate-45"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center relative">
                <div>
                    <h3 class="text-2xl font-black uppercase text-[var(--color-secondary)] mb-6 tracking-wide">
                        Service personnalisé
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                        Notre équipe adapte son approche pour répondre aux spécificités de chaque véhicule. 
                        Nous travaillons avec toutes les marques et disposons des équipements les plus modernes.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-[var(--color-primary)] mr-2"></div>
                            <span class="text-sm text-gray-700 font-medium">Toutes marques</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-[var(--color-primary)] mr-2"></div>
                            <span class="text-sm text-gray-700 font-medium">Véhicules récents</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-[var(--color-primary)] mr-2"></div>
                            <span class="text-sm text-gray-700 font-medium">Véhicules anciens</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-[var(--color-primary)] mr-2"></div>
                            <span class="text-sm text-gray-700 font-medium">Véhicules utilitaires</span>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <div class="w-24 h-24 bg-[var(--color-primary)] flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-black uppercase text-[var(--color-secondary)] mb-2 tracking-wide">Garantie Qualité</h4>
                    <p class="text-sm text-gray-600">Tous nos services sont garantis selon les standards constructeur</p>
                </div>
            </div>
        </div>
    </div>
</section>
