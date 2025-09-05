@props([
    'width' => '24',
    'height' => '24',
    'class' => '',
    'color' => 'currentColor'
])

<svg
    width="{{ $width }}"
    height="{{ $height }}"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => $class]) }}
>
    <path 
        d="M9 5L15 12L9 19" 
        stroke="{{ $color }}" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round"
    />
</svg> 