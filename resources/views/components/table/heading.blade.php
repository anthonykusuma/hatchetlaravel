@props([
    'sortable' => null,
    'direction' => null,
    ])

<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50'])->only('class') }}>

    @unless ($sortable)
    {{ $slot }}
    @else
        {{ $slot }}
    @endunless
</th>
