@if($label)
<label class="@if($required) required @endif form-label">{{$label ?? '' }}</label>
@else
 {{ '' }}
@endif
<input
    type="{{ $type ?? 'text' }}"
    @if($placeholder) placeholder="{{ $placeholder ?? '' }}" @endif
    name="{{ $name ?? '' }}"
    class="{{ $class ?? '' }}"
    id="{{ $id ?? '' }}"
    @if ($autocomplete) autocomplete="{{ $autocomplete ?? '' }}" @endif
    @if ($value) value="{{ $value ?? '' }}" @endif
/>

