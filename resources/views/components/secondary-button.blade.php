<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-outline btn-primary']) }}>
    {{ $slot }}
</button>
