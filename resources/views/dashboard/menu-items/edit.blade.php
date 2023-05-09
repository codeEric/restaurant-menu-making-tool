<x-layout title="Edit menu item">
    <x-dashboard>
        <div class="flex flex-col items-center w-96 pt-12">
            <h1 class="text-2xl font-bold">Edit menu item: {{ $menuItem->name }}</h1>
            <form action="/dashboard/menu/menu-items/{{ $menu->id }}/{{ $menuItem->id }}" method="POST">
                @csrf
                @method('Put')
                <x-form.input name="name" :value="old('name', $menuItem->name)" />
                <x-form.input name="price" :value="old('price', $menuItem->price)" />
                <x-form.textarea name="description">
                    {{ old('description', $menuItem->description) }}
                </x-form.textarea>
                <x-form.select name="category" :value="old('category', $menuItem->category)" />
                <x-form.imageupload name="image"></x-form.imageupload>
                <x-form.submit>Save</x-form.submit>
            </form>
        </div>
    </x-dashboard>
</x-layout>
