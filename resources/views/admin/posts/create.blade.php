<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <div class="mb-6">
                <x-form.label name="{{ $name }}" />

                <select name="category_id" id="category">
                    @php
                    $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach

                </select>

                <x-form.error name="{{ $name }}" />
            </div>
            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>

</x-layout>