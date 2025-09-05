@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'mainText' => null,
    'subText' => null,
])

@php
    use Illuminate\Support\Arr;

    $tag = $href ? 'a' : 'button';

    $baseClassMap = [
        'primary' => 'relative inline-flex items-center group overflow-hidden bg-white hover:shadow-lg transition-all duration-300',
        'secondary' => 'relative inline-flex items-center group overflow-hidden bg-[var(--color-primary)] hover:shadow-lg transition-all duration-300',
        'outline' => 'relative inline-flex items-center group overflow-hidden border-2 border-[var(--color-primary)] bg-transparent hover:shadow-lg transition-all duration-300',
    ];

    $baseClasses = Arr::get($baseClassMap, $variant, $baseClassMap['primary']);
    $classes = trim($baseClasses);

    $attributes = $attributes->merge(['class' => $classes]);

    if ($href) {
        $attributes = $attributes->merge(['href' => $href]);
    } else {
        $attributes = $attributes->merge(['type' => $type]);
    }

    $isTwoLine = $mainText && $subText;
@endphp

<{{ $tag }} {{ $attributes }}>
    @if($variant === 'primary')
        <span class="absolute inset-0 bg-[var(--color-primary)] w-0 group-hover:w-full transition-all duration-500 ease-in-out z-0"></span>
        <span class="relative z-10 flex items-center gap-3 px-6 py-3">
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" class="w-5 h-5 text-black group-hover:text-white transition-colors duration-500" />
            @else
                <span class="text-black group-hover:text-white transform transition-transform duration-500 group-hover:rotate-90 text-xl font-bold">
                    +
                </span>
            @endif
            <span class="uppercase font-semibold text-black group-hover:text-white transition-colors duration-500 tracking-wide">
                @if($isTwoLine)
                    <div class="flex flex-col">
                        <span class="text-sm font-bold">{{ $mainText }}</span>
                        <span class="text-xs opacity-75">{{ $subText }}</span>
                    </div>
                @else
                    {{ $slot }}
                @endif
            </span>
        </span>
        <span class="absolute left-0 top-0 h-full w-1 bg-[var(--color-primary)] z-20"></span>
    @elseif($variant === 'secondary')
        <span class="absolute inset-0 bg-white w-0 group-hover:w-full transition-all duration-500 ease-in-out z-0"></span>
        <span class="relative z-10 flex items-center gap-3 px-6 py-3">
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" class="w-5 h-5 text-white group-hover:text-black transition-colors duration-500" />
            @else
                <span class="text-white group-hover:text-black transform transition-transform duration-500 group-hover:rotate-90 text-xl font-bold">
                    +
                </span>
            @endif
            <span class="uppercase font-semibold text-white group-hover:text-black transition-colors duration-500 tracking-wide">
                @if($isTwoLine)
                    <div class="flex flex-col">
                        <span class="text-sm font-bold">{{ $mainText }}</span>
                        <span class="text-xs opacity-75">{{ $subText }}</span>
                    </div>
                @else
                    {{ $slot }}
                @endif
            </span>
        </span>
        <span class="absolute left-0 top-0 h-full w-1 bg-white z-20"></span>
    @elseif($variant === 'outline')
        <span class="absolute inset-0 bg-[var(--color-primary)] w-0 group-hover:w-full transition-all duration-500 ease-in-out z-0"></span>
        <span class="relative z-10 flex items-center gap-3 px-6 py-3">
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" class="w-5 h-5 text-[var(--color-primary)] group-hover:text-white transition-colors duration-500" />
            @else
                <span class="text-[var(--color-primary)] group-hover:text-white transform transition-transform duration-500 group-hover:rotate-90 text-xl font-bold">
                    +
                </span>
            @endif
            <span class="uppercase font-semibold text-[var(--color-primary)] group-hover:text-white transition-colors duration-500 tracking-wide">
                @if($isTwoLine)
                    <div class="flex flex-col">
                        <span class="text-sm font-bold">{{ $mainText }}</span>
                        <span class="text-xs opacity-75">{{ $subText }}</span>
                    </div>
                @else
                    {{ $slot }}
                @endif
            </span>
        </span>
        <span class="absolute left-0 top-0 h-full w-1 bg-[var(--color-primary)] z-20"></span>
    @endif
</{{ $tag }}> 