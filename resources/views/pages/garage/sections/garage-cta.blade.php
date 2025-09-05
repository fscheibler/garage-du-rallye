{{-- SECTION CTA GARAGE INSPIRÉE SHIFTUP --}}
<section class="relative py-20 bg-gradient-to-r from-[var(--color-secondary)] to-[var(--color-secondary)]/90 overflow-hidden">
    
    {{-- Image de fond --}}
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-10" 
         style="background-image: url('{{ asset('images/garage/tools-background.jpg') }}');">
    </div>
    
    {{-- Éléments décoratifs ShiftUp style --}}
    <div class="absolute top-8 right-8 w-32 h-32 border-2 border-[var(--color-primary)]/30 rotate-45 hidden lg:block"></div>
    <div class="absolute bottom-8 left-8 w-24 h-24 bg-[var(--color-primary)]/20 rotate-12 hidden lg:block"></div>
    
    {{-- Pattern géométrique --}}
    <div class="absolute top-1/2 right-1/4 w-64 h-64 hidden lg:block opacity-20">
        <div class="w-full h-full border border-white/30 transform rotate-45">
            <div class="w-1/2 h-1/2 border-r border-b border-white/30 m-auto mt-1/4">
                <div class="w-1/2 h-1/2 border-r border-b border-white/30"></div>
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Colonne de contenu --}}
            <div class="lg:col-span-8 text-white">
                
                {{-- Badge --}}
                <div class="inline-flex items-center bg-[var(--color-primary)]/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                    <span class="w-2 h-2 bg-[var(--color-primary)] rounded-full mr-2 animate-pulse"></span>
                    <span class="text-sm font-medium text-[var(--color-primary)]">Rendez-vous disponible</span>
                </div>
                
                {{-- Titre principal --}}
                <h2 class="text-4xl lg:text-5xl font-black uppercase mb-6 leading-tight">
                    Prêt à confier votre véhicule aux
                    <span class="text-[var(--color-primary)]">experts</span> ?
                </h2>
                
                {{-- Description --}}
                <p class="text-xl leading-relaxed mb-8 text-gray-200 max-w-3xl">
                    Prenez rendez-vous dès maintenant et bénéficiez de notre expertise pour maintenir votre véhicule en parfait état. 
                    Diagnostic gratuit, devis transparent et interventions rapides.
                </p>
                
                {{-- Points forts --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold">Prise de RDV simple</div>
                            <div class="text-sm text-gray-300">En ligne ou par téléphone</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold">Service express</div>
                            <div class="text-sm text-gray-300">Diagnostic sous 30 min</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold">Garantie incluse</div>
                            <div class="text-sm text-gray-300">Sur toutes interventions</div>
                        </div>
                    </div>
                </div>
                
                {{-- Boutons CTA --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-base.button href="/contact" variant="primary" class="text-lg px-8 py-4 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Prendre rendez-vous
                    </x-base.button>
                    <x-base.button href="tel:+41234567890" variant="outline" class="text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-[var(--color-secondary)] transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Appeler maintenant
                    </x-base.button>
                </div>
            </div>
            
            {{-- Colonne image/illustration --}}
            <div class="lg:col-span-4 relative hidden lg:block">
                <div class="relative">
                    {{-- Image principale --}}
                    <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl border border-white/20">
                        <div class="text-center text-white">
                            <div class="w-24 h-24 mx-auto bg-[var(--color-primary)] rounded-full flex items-center justify-center mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Horaires d'ouverture</h3>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span>Lun - Ven</span>
                                    <span class="text-[var(--color-primary)]">8h - 18h</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Samedi</span>
                                    <span class="text-[var(--color-primary)]">8h - 12h</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Dimanche</span>
                                    <span class="text-gray-400">Fermé</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Badge flottant --}}
                    <div class="absolute -top-4 -right-4 bg-[var(--color-primary)] text-white px-4 py-2 rounded-full text-sm font-bold shadow-xl">
                        Ouvert maintenant
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
