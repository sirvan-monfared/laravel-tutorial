<x-front.forms.select-modern name="{{ $name }}" title="لوکیشن" {{ $attributes }}>

    <option value="" selected disabled>انتخاب کنید</option>
    @foreach($locations as $state)
        <optgroup label="{{ $state->title }}"></optgroup>

        @foreach($state->children as $city)
            <option
                value="{{ $city->id }}" @selected($city->id === (int) old('location_id', $value))>{{ $city->title }}</option>
        @endforeach
    @endforeach
</x-front.forms.select-modern>
