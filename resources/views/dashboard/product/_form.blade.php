<x-text-input type="text" name="title" title="Title" :value="$product->title"/>

<x-text-input type="text" name="slug" title="Slug" :value="$product->slug"/>

<x-text-input type="text" name="price" title="Price ($)" :value="$product->price"/>

<x-textarea name="short_description" class="text-editor" title="short description"
            rows="7">{!! $product->short_description !!}</x-textarea>

<x-text-input type="number" name="qty" title="Quantity" :value="$product->qty"/>

<x-color-picker :current-colors="$product->colors"></x-color-picker>

<x-category-picker :current-id="$product->category?->id"></x-category-picker>

<x-text-input type="text" name="sku" title="SKU" :value="$product->sku"/>

<x-textarea name="description" title="Description" class="text-editor"
            rows="7">{!! $product->description  !!}</x-textarea>

<div class="mb-3">
    <label for="">Image</label>
    <input type="file" name="image[]" class="form-control mb-3" multiple>
    @error('image.*') <div class="form-text text-danger">{{ $message }}</div> @enderror

    @foreach($product->images as $image)
        <img src="{{ $image->url() }}" alt="" style="width: 100px !important; height: 100px !important;"
             class="img-fluid img-thumbnail">
    @endforeach
</div>


<button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Create' }}</button>
