<select name="" id="" class="h-12 border border-gray-300 border-l-transparent px-3 flex-1">
    <option value="">همه ایران</option>
    @foreach($locations as $state)
        <optgroup label="{{ $state->title }}"></optgroup>

        @foreach($state->children as $city)
            <option value="{{ $city->id }}">{{ $city->title }}</option>
        @endforeach
    @endforeach
</select>
