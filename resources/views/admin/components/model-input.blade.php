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
    <label for="model-input-{{ $name }}">{{ $title }}@if($attributes->has('required'))*@endif</label>
    <input id="model-input-{{ $name }}" name="{{ $name }}" value="{{ $value }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $defaultClass]) !!} />
    @error($requestName)
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>
