<div class="form-group">
    <label for="{{ $label }}">{{ $slot }}</label>
    <select name="{{ $label }}" class="form-control" id="{{ $label }}">
        @foreach($options as $value => $show)
            <option value='{{ $value }}'>{{ $show }}</option>
        @endforeach
    </select>
</div>