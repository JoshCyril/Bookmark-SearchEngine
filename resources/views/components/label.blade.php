@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-textc']) }}>
    {{ $value ?? $slot }}
</label>
