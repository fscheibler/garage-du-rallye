<section class="relative bg-[#f4f5f7] text-[var(--color-secondary)] py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-16">
        <!-- Colonne gauche : texte + boutons -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-5xl uppercase font-black leading-tight mb-6">
                Besoin d'un<br>rendez-vous ?
            </h2>
            
            <p class="text-lg text-[var(--color-tertiary)] mb-10 max-w-xl">
                Notre équipe vous répond rapidement pour toute demande d'entretien, de réparation ou d'information.
                Appelez-nous ou utilisez notre formulaire en ligne.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <x-base.button href="tel:+41221234567" variant="primary">
                    Appelez-nous
                </x-base.button>
                <x-base.button href="{{ route('contact') }}" variant="secondary">
                    Écrivez-nous
                </x-base.button>
            </div>
        </div>
        
        <!-- Colonne droite : image -->
        <div class="h-full">
            <img src="/images/home/contact.jpg"
                 alt="Prendre rendez-vous"
                 class="w-full max-w-lg mx-auto">
        </div>
    </div>
</section> 