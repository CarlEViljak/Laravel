<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />

            <div class="flex mt-6">
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />

                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl" width="100">
            </div>

            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <div class="mb-6">
                <x-form.label name="{{ $name }}" />

                <select name="category_id" id="category">
                    @php
                    $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach

                </select>

                <x-form.error name="{{ $name }}" />
            </div>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>

</x-layout>