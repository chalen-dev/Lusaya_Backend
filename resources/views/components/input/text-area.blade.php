@props([
    'id',
    'label',
    'name',
    'value' => null,
    'rows' => 5,
    'cols' => 50,
    'attributes' => null
])

<div class="space-y-1">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-400">
            {{ $label }}
        </label>
    @endif

    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        cols="{{ $cols }}"
        {{ $attributes->merge(['class' => 'w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors resize-y']) }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
    <p class="text-sm text-pink-400 mt-1">{{ $message }}</p>
    @enderror
</div>
