<x-layout title="Create new menu item">
    <x-dashboard>
        <div class="flex flex-col items-center w-96 pt-12">
            <h1 class="text-2xl font-bold">Create new menu item</h1>
            <form action="/dashboard/menu/menu-items/{{ $id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="name" autocomplete="off" />
                <x-form.input name="smprice" labelName="Small price" autocomplete="off" />
                <x-form.input name="lgprice" labelName="Large price" autocomplete="off" />
                <x-form.textarea name="description" />
                <x-form.select name="category" />
                <x-form.imageupload name="image"></x-form.imageupload>
                <x-form.submit>Create</x-form.submit>

            </form>
        </div>
    </x-dashboard>
</x-layout>
