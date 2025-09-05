@props([
    'width' => '32',
    'height' => '33',
    'class' => '',
    'color' => '#005C22'
])

<svg
    width="{{ $width }}"
    height="{{ $height }}"
    viewBox="0 0 32 33"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => $class]) }}
>
    <path 
        d="M20 24.3096L12 16.3096L20 8.30963" 
        stroke="{{ $color }}" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round"
    />
</svg> 