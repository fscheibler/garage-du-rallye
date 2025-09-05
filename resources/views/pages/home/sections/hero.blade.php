<section x-data="carousel()" class="relative w-full h-[50vh] overflow-hidden">

    {{-- Slides container --}}
    <div class="w-full h-full flex transition-transform duration-700 ease-in-out"
         :style="`transform: translateX(-${active * 100}%);`">

        <template x-for="(slide, index) in slides" :key="index">
            <div class="w-full flex-shrink-0 bg-cover bg-center relative flex items-center"
                 :style="`background-image: url('${slide.image}'); height: 50vh;`">

                <div class="container mx-auto px-6">
                    <div class="max-w-2xl ml-auto text-right text-white">
                        <h2 class="text-4xl text-black uppercase font-bold mb-4" x-text="slide.title"></h2>
                        <p class="mb-6 text-lg" x-text="slide.text"></p>
                        <x-base.button href="/services" variant="primary">
                            View more
                        </x-base.button>
                    </div>
                </div>
            </div>
        </template>
    </div>

    {{-- Arrows + pagination dans le container --}}
    <div class="absolute bottom-6 inset-x-0">
        <div class="container mx-auto px-6 flex items-center justify-between text-white">

            {{-- Arrows --}}
            <div class="flex gap-2 text-white">
                <button
                    @click="prev"
                    class="w-[40px] text-3xl font-light transition-all tracking-[.15em] duration-300 hover:tracking-normal hover:text-4xl text-right"
                >
                    &larr;
                </button>
                <button
                    @click="next"
                    class="w-[40px] text-3xl font-light transition-all tracking-[.15em] duration-300 hover:tracking-normal hover:text-4xl text-right"
                >
                    &rarr;
                </button>
            </div>

            {{-- Pagination --}}
            <div class="flex gap-4 font-mono text-sm">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                        @click="goTo(index)"
                        :class="{ 'text-3xl text-black': active === index, 'text-2xl text-black': active !== index }"
                    >
                        <span x-text="`0${index + 1}`"></span>
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
    function carousel() {
        return {
            active: 0,
            interval: null,
            slides: [
                {
                    image: '/images/home/slide1.jpg',
                    title: 'Top New Features Coming to Shop',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing eli.',
                    link: '#'
                },
                {
                    image: '/images/home/slide2.jpg',
                    title: 'Promo spéciale sur les diagnostics',
                    text: 'Jusqu\'à -30% ce mois-ci.',
                    link: '#'
                },
                {
                    image: '/images/home/slide3.jpg',
                    title: 'Prenez rendez-vous en ligne',
                    text: 'Entretien, pneus, contrôle – rapide & efficace.',
                    link: '#'
                },
                {
                    image: '/images/home/slide4.jpg',
                    title: 'Nouvelle gamme de services',
                    text: 'Toujours plus proche de vos besoins.',
                    link: '#'
                }
            ],
            goTo(i) {
                this.active = i;
            },
            prev() {
                this.active = (this.active - 1 + this.slides.length) % this.slides.length;
            },
            next() {
                this.active = (this.active + 1) % this.slides.length;
            },
            startAutoplay() {
                this.interval = setInterval(() => this.next(), 5000);
            },
            init() {
                this.startAutoplay();
            }
        }
    }
</script>
