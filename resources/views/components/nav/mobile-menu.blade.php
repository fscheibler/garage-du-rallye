{{-- Menu mobile overlay --}}
<div
    x-data="{
        isOpen: false,
        toggle() {
            this.isOpen = !this.isOpen;
            if (this.isOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        close() {
            this.isOpen = false;
            document.body.style.overflow = '';
        }
    }"
    x-init="$watch('isOpen', value => {
        if (value) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    })"
    class="lg:hidden"
>
    {{-- Bouton hamburger --}}
    <button
        @click="toggle"
        class="relative z-50 p-2 text-gray-700 hover:text-primary transition-colors"
        :aria-expanded="isOpen"
        aria-label="Menu mobile"
    >
        <div class="w-6 h-6 flex flex-col justify-center items-center">
            <span
                class="w-6 h-0.5 bg-current transform transition-all duration-300"
                :class="isOpen ? 'rotate-45 translate-y-1.5' : ''"
            ></span>
            <span
                class="w-6 h-0.5 bg-current mt-1.5 transform transition-all duration-300"
                :class="isOpen ? 'opacity-0' : ''"
            ></span>
            <span
                class="w-6 h-0.5 bg-current mt-1.5 transform transition-all duration-300"
                :class="isOpen ? '-rotate-45 -translate-y-1.5' : ''"
            ></span>
        </div>
    </button>

    {{-- Overlay du menu --}}
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-50 z-40"
        @click="close"
    ></div>

    {{-- Menu mobile --}}
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform translate-x-full"
        x-transition:enter-end="transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="transform translate-x-0"
        x-transition:leave-end="transform translate-x-full"
        class="fixed top-0 right-0 h-full w-80 bg-white shadow-2xl z-50 flex flex-col"
    >
        {{-- Header du menu mobile --}}
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <img src="/images/logo.png" alt="Logo Garage" class="h-8 w-auto">
            <button
                @click="close"
                class="p-2 text-gray-500 hover:text-gray-700 transition-colors"
                aria-label="Fermer le menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- Navigation mobile --}}
        <nav class="flex-1 px-6 py-8">
            <ul class="space-y-6">
                @foreach([
                    'home' => 'Accueil',
                    'services' => 'Le garage',
                    'sales' => 'Vente',
                    'blog' => 'Blog',
                    'contact' => 'Contact'
                ] as $route => $label)
                    <li>
                        <a
                            href="{{ route($route) }}"
                            @click="close"
                            class="block text-lg font-semibold text-gray-800 hover:text-primary transition-colors py-3 border-b border-gray-100
                            @if(Route::currentRouteName() === $route)
                                text-primary border-primary
                            @endif"
                        >
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        {{-- Footer du menu mobile --}}
        <div class="p-6 border-t border-gray-200">
            <div class="flex items-center space-x-4 text-sm text-gray-600">
                <div class="flex items-center space-x-2">
                    <x-icons.phone class="w-4 h-4" />
                    <span>01 23 45 67 89</span>
                </div>
            </div>
        </div>
    </div>
</div>
