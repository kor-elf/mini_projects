@php
    $defaultClass = 'form-control';
    if ($errors->has($requestName)) {
        $defaultClass .= ' is-invalid';
    }

    if ($attributes->has('disabled')) {
        $disabled = $attributes['disabled'];
    }
@endphp

@props([
    'disabled' => false,
    'defaultClass' => ''
])
<div class="form-group">
    <label for="model-select-{{ $name }}">{{ $title }}@if($attributes->has('required'))*@endif</label>
    <select id="model-select-{{ $name }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $defaultClass]) !!}>
        @foreach($items as $itemValue => $itemTitle)
            <option @if ($value !== null && $itemValue == $value) selected="selected" @endif value="{{ $itemValue }}">{{ $itemTitle }}</option>
        @endforeach
    </select>
    @error($requestName)
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>
