@extends('adminlte::components.form.input-group-component')
{{-- ADAM FIX --}}
{{-- Set errors bag internally --}}
@php($setErrorsBag($errors ?? null))

{{-- Set input group item section --}}
@section('input_group_item')
    {{-- Input Color --}}
    <input 
        id="{{ $id }}" 
        name="{{ $name }}"
        {{ $attributes->merge(['class' => $makeItemClass()]) }}>
@overwrite

@push('js')
<script>
    (function() {
        // cache selectors
        var $input = $('#{{ $id }}');
        var $addonIcon = $input
            .closest('.input-group')
            .find('.input-group-text > i');

        // this function will repaint the icon to match the picker's color
        function setAddonColor() {
            var color = $input.data('colorpicker').getValue();
            $addonIcon.css('color', color);
        }

        // once DOM is ready, initialize the plugin
        $(document).ready(function() {
            // initialize bootstrap-colorpicker
            $input
                .colorpicker(@json($config))
                .on('changeColor', setAddonColor);

            // if validation failed and old support is enabled, restore the previous input
            @if($errors->any() && $enableOldSupport)
                var oldColor = @json($getOldValue($errorKey, ""));
                if (oldColor) {
                    $input
                        .val(oldColor)
                        .data('colorpicker')
                        .setValue(oldColor);
                }
            @endif

            // paint the initial icon color
            setAddonColor();
        });
    })();
</script>
@endpush
