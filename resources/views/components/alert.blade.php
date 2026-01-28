@props([
    'type' => 'note',
    'title' => null
])

@php
    $styles = [
            'success' => [
                'bg' => '#e6fffa',
                'border' => '#38b2ac',
                'text' => '#065f46',
            ],
            'warning' => [
                'bg' => '#fffaf0',
                'border' => '#dd6b20',
                'text' => '#7c2d12',
            ],
            'note' => [
                'bg' => '#eff6ff',
                'border' => '#3b82f6',
                'text' => '#1e3a8a',
            ],
        ];
        $style = $styles[$type] ?? $styles['note'];
@endphp

<div class="alert"
     style="
        background-color: {{ $style['bg'] }};
        border-color: {{ $style['border'] }};
        color: {{ $style['text'] }};
     "
>

    <div class="alert-title">{{ $title }}</div>

    <div class="alert-message">
        {{ $slot }}
    </div>

</div>