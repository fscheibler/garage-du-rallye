<section class="relative bg-white py-24 font-[var(--font-sans)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <iframe
                src="https://www.autoscout24.ch/fr/hci/list?design=4842&filter=10098"
                width="100%"
                height="1400"
                frameborder="0"
                scrolling="auto"
                style="border: none;">
            </iframe>
        </div>
        
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold text-[var(--color-secondary)] mb-4">
                Intéressé par un véhicule ?
            </h3>
            <p class="text-lg text-[var(--color-tertiary)] mb-8">
                Contactez-nous pour plus d'informations ou pour prendre rendez-vous
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <x-base.button href="tel:+41221234567" variant="primary">
                    Appelez-nous
                </x-base.button>
                <x-base.button href="{{ route('contact') }}" variant="secondary">
                    Écrivez-nous
                </x-base.button>
            </div>
        </div>
    </div>
</section> 