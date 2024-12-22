<select name="{{ $name }}" id="{{ $name }}" class="h-12 border border-gray-300 border-l-transparent px-3 flex-1">
    <option value="">همه دسته ها</option>
    @foreach($categories as $category)
        <optgroup label="{{ $category->title }}"></optgroup>

        @foreach($category->children as $subcategory)
            <option value="{{ $subcategory->id }}" @selected($subcategory->id === $value)>{{ $subcategory->title }}</option>
        @endforeach
    @endforeach
</select>
