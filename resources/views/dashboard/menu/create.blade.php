<x-layout title="Create new menu - Dashboard">
    <x-dashboard>
        <div class="flex flex-col items-center w-96 pt-12">
            <h1 class="text-2xl font-bold">Create new menu</h1>
            <form action="/dashboard/menu" method="POST">
                @csrf
                <x-form.input name="name" autocomplete="off" />
                <x-form.submit>Create</x-form.submit>

            </form>
        </div>
    </x-dashboard>
</x-layout>
