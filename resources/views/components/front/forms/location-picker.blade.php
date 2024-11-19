<x-front.forms.select-modern name="location_id" title="لوکیشن">
    <option value="" selected disabled>انتخاب کنید</option>
    @foreach($locations as $state)
        <optgroup label="{{ $state->title }}"></optgroup>

        @foreach($state->children as $city)
            <option
                value="{{ $city->id }}" @selected($city->id === (int) old('location_id'))>{{ $city->title }}</option>
        @endforeach
    @endforeach
</x-front.forms.select-modern>
