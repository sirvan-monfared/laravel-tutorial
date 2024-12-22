<x-front.forms.select-modern name="category_id" title="گروه">
    <option value="" selected disabled>انتخاب کنید</option>
    @foreach($categories as $category)
        <optgroup label="{{ $category->title }}"></optgroup>

        @foreach($category->children as $subcategory)
            <option
                value="{{ $subcategory->id }}" @selected($subcategory->id === (int) old('category_id', $value))>{{ $subcategory->title }}</option>
        @endforeach
    @endforeach
</x-front.forms.select-modern>
