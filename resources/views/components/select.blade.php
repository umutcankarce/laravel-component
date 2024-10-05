<label for="{{ $name }}" class="form-label">{{$label}}</label>
<select class="{{ $class }}" name="{{ $name }}" id="{{ $name }}" data-control="select2" data-hide-search="true"
    data-placeholder="{{ $label }}">
    <option></option>
    @foreach ($dataValues as $item)
        <option @if($selectedOptionId == $item[$dataOptionValueName]) selected @endif
         value="{{$item[$dataOptionValueName]}}">{{ $item[$dataOptionTitle] }}</option>
    @endforeach
</select>