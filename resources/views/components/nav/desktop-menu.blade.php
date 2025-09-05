{{-- Menu centré avec marker animé au hover uniquement --}}
<nav
    x-data="{
        marker: null,
        move(e) {
            const el = e.target.closest('a');
            this.marker.style.left = el.offsetLeft + 'px';
            this.marker.style.width = el.offsetWidth + 'px';
        },
        hide() {
            this.marker.style.transition = 'none';
            this.marker.style.width = 0;
            setTimeout(() => {
                this.marker.style.transition = 'all 0.3s ease-in-out';
            }, 10);
        },
        init() {
            this.marker = $refs.marker;
        }
    }"
    x-init="init"
    x-ref="nav"
    @mouseleave="hide"
    class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2"
>
    <div
        x-ref="marker"
        class="absolute -top-8 h-[7px] bg-primary"
        style="width: 0; transition: all 0.3s ease-in-out;"
    ></div>

    <ul class="flex text-bases font-semibold tracking-wide uppercase">
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
                    class="relative px-8 pt-9 pb-3
                @if(Route::currentRouteName() === $route)
                    before:absolute before:top-0 before:left-0 before:h-[7px] before:w-full before:bg-primary is-active
                @endif"
                    @mouseenter="move"
                >
                    {{ $label }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
