@php
    use Illuminate\Support\Facades\Storage;
    $brands = config('brands.brands');
@endphp

<section class="relative bg-[var(--color-primary)] py-12 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative overflow-hidden">
            <div class="flex gap-8 animate-scroll">
                {{-- Premier jeu de logos --}}
                @foreach ($brands as $brand)
                    <div class="flex-shrink-0 inline-flex items-center justify-center w-[140px] h-[80px] bg-white shadow-sm">
                        <img src="{{ Storage::url($brand['logo']) }}"
                             alt="{{ $brand['name'] }}"
                             class="max-h-12 h-auto object-contain"
                             loading="lazy">
                    </div>
                @endforeach
                
                {{-- Duplication pour l'effet de boucle infinie --}}
                @foreach ($brands as $brand)
                    <div class="flex-shrink-0 inline-flex items-center justify-center w-[140px] h-[80px] bg-white shadow-sm">
                        <img src="{{ Storage::url($brand['logo']) }}"
                             alt="{{ $brand['name'] }}"
                             class="max-h-12 h-auto object-contain"
                             loading="lazy">
                    </div>
                @endforeach
            </div>

            {{-- Masques flous sur les côtés --}}
            <div class="pointer-events-none absolute top-0 left-0 h-full w-24 z-20"
                 style="background: linear-gradient(to right, var(--color-primary) 0%, transparent 100%)">
            </div>
            <div class="pointer-events-none absolute top-0 right-0 h-full w-24 z-20"
                 style="background: linear-gradient(to left, var(--color-primary) 0%, transparent 100%)">
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    .animate-scroll {
        animation: scroll 60s linear infinite;
        width: fit-content;
    }
    
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
