<x-admin.form.form-group>
    <x-admin.form.input name="title" title="عنوان " :half="true"
                        :value="$location->title"/>

    <x-admin.form.input name="slug" title="نامک" :half="true" :value="$location->slug"/>
</x-admin.form.form-group>


<x-admin.form.select name="parent_id" title="استان">
    <option value="">انتخاب کنید</option>
    @foreach($states as $state)
        <option
            value="{{ $state->id }}" @selected($location->parent_id === $state->id)>{{ $state->title }}</option>
    @endforeach
</x-admin.form.select>

