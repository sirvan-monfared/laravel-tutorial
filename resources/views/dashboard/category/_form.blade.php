<x-text-input type="text" name="title" title="Title" :value="$category->title"/>

<x-text-input type="text" name="slug" title="Slug" :value="$category->slug"/>

<button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Create' }}</button>
