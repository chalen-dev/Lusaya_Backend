@props([
    'id',
    'name',
    'label',
    'value' => 1,
    'options' => []
])

<div class="space-y-1">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-400">
            {{ $label }}
        </label>
    @endif

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl text-white focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors appearance-none']) }}
    >
        @foreach($options as $val => $text)
            <option value="{{ $val }}" @selected(old($name, $value) == $val)>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
    <p class="text-sm text-pink-400 mt-1">{{ $message }}</p>
    @enderror
</div>
