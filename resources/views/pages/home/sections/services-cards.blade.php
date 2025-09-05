@props(['blogs'])

<section class="relative bg-[#f4f5f7] py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-[var(--color-secondary)] mb-6">
                Nos Services Principaux
            </h2>
            <p class="text-lg text-[var(--color-tertiary)] max-w-2xl mx-auto">
                Découvrez notre gamme complète de services pour l'entretien et la réparation de votre véhicule
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Carte Entretien -->
            <div class="group relative bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)]">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="relative bg-white px-8 py-10 text-[var(--color-secondary)]">
                    
                    <h3 class="text-2xl font-black uppercase mb-4">
                        Entretien & Révision
                    </h3>
                    <p class="text-sm leading-relaxed text-[var(--color-tertiary)] mb-6">
                        Entretien complet selon les préconisations constructeur. Vidange, filtres, révision complète pour maintenir votre véhicule en parfait état.
                    </p>
                    
                    <ul class="text-sm text-[var(--color-tertiary)] space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Vidange huile et filtres
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Révision complète
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Maintenance préventive
                        </li>
                    </ul>
                    
                    <x-base.button href="{{ route('services') }}#entretien" variant="primary">
                        En savoir plus
                    </x-base.button>
                </div>
            </div>
            
            <!-- Carte Diagnostic -->
            <div class="group relative bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-gradient-to-br from-[var(--color-secondary)] to-[var(--color-primary)]">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="relative bg-white px-8 py-10 text-[var(--color-secondary)]">
                    
                    <h3 class="text-2xl font-black uppercase mb-4">
                        Diagnostic & Réparation
                    </h3>
                    <p class="text-sm leading-relaxed text-[var(--color-tertiary)] mb-6">
                        Diagnostic précis et réparation efficace. Notre équipe d'experts identifie rapidement les problèmes et propose des solutions adaptées.
                    </p>
                    
                    <ul class="text-sm text-[var(--color-tertiary)] space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Diagnostic électronique
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Réparation moteur
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Système de freinage
                        </li>
                    </ul>
                    
                    <x-base.button href="{{ route('services') }}#diagnostic">
                        En savoir plus
                    </x-base.button>
                </div>
            </div>
            
            <!-- Carte Pneus -->
            <div class="group relative bg-white shadow-lg overflow-hidden">
                <div class="relative h-48 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)]">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="relative bg-white px-8 py-10 text-[var(--color-secondary)]">
                    
                    <h3 class="text-2xl font-black uppercase mb-4">
                        Pneus & Géométrie
                    </h3>
                    <p class="text-sm leading-relaxed text-[var(--color-tertiary)] mb-6">
                        Service complet de pneus : montage, équilibrage, réparation et réglage de géométrie pour optimiser votre tenue de route.
                    </p>
                    
                    <ul class="text-sm text-[var(--color-tertiary)] space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Montage et équilibrage
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Réparation de pneus
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[var(--color-primary)] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Géométrie et alignement
                        </li>
                    </ul>
                    
                    <x-base.button href="{{ route('services') }}#pneus" variant="primary" icon="arrow-right">
                        En savoir plus
                    </x-base.button>
                </div>
            </div>
        </div>
    </div>
</section> 