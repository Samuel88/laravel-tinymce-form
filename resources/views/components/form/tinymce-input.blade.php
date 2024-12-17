@pushOnce('scripts-footer')
    @vite('resources/js/tinyMCE.js')
@endpushOnce

@props([
    'name' => 'test',
    'label' => 'Test',
])

<label for="{{ $name }}">{{ $label }}</label>
<textarea class="tinyMce" name="{{ $name }}" id="{{ $name }}">{{ $slot }}</textarea>
