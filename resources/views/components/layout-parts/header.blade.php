<header class="bg-white shadow border-b border-gray-100 relative">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-2 z-10">
            <img src="/images/logo.png" alt="Logo Garage" class="h-13 w-auto">
        </a>

        {{-- Menu desktop (visible uniquement sur lg et plus) --}}
        <div class="hidden lg:block">
            <x-nav.desktop-menu />
        </div>

        {{-- Menu mobile (visible uniquement sur mobile et tablet) --}}
        <x-nav.mobile-menu />
    </div>
</header>