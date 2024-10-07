<div class="form-group mb-4">
    <label for="">Color</label>
    <select class="form-control select_2" name="colors[]" multiple>
        @foreach($colors as $color)
            <option value="{{ $color->id }}" @selected($currentColors?->contains($color))>{{ $color->name }}</option>
        @endforeach
    </select>
</div>
