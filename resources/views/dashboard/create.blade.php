<x-layout title="Create new menu - Dashboard">
    <x-dashboard>
        <div class="flex flex-col items-center w-96">
            <x-form.input name="name" />
            <x-form.textarea name="description" />
            <x-form.select name="category" />
            <x-form.submit>Add</x-form.submit>
        </div>
    </x-dashboard>
</x-layout>
