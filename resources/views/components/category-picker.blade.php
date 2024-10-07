<div class="form-group mb-4">
    <label for="">Category</label>
    <select class="form-control select_2" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected($currentId === $category->id)>{{ $category->title }}</option>
        @endforeach
    </select>
</div>
