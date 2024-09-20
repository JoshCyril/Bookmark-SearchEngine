@props(['active', 'index', 'navigate'])

@php

if($active){
$classes = ($index == 0)
? 'inline-flex
items-center justify-center h-8 px-4
font-medium tracking-wide text-textc transition
duration-200 rounded shadow-md
hover:text-textc hover:bg-purple-100
focus:shadow-outline focus:outline-none
border-2 border-purple-500/75 shadow-none '
: 'inline-flex items-center
justify-center h-8 px-4 font-medium
tracking-wide text-textc transition
duration-200 bg-purple-500 rounded
shadow-md hover:text-textc hover:bg-purple-100
border-2 border-purple-500/75 shadow-none
focus:shadow-outline focus:outline-none';

}else{
$classes = ($index == 0)
? 'h-8 px-4 border-2 border-purple-500/0 font-medium tracking-wide text-textc transition-colors duration-200 hover:text-primary'
: 'h-8 px-4 border-2 hover:underline decoration-2 underline-offset-8 border-purple-500/0 font-medium tracking-wide text-textc transition-colors duration-200 hover:text-primary';
};

@endphp

<li>
    <a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
