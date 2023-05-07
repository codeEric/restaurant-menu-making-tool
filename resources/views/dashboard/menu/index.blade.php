<x-layout title="Dashboard">
    <x-dashboard>
        @if ($menus->count() > 0)
            <div class="grid grid-cols-5 items-center justify-center gap-12">
                @foreach ($menus as $menu)
                    <x-card name="{{ $menu->name }}" id="{{ $menu->id }}" />
                @endforeach
            </div>
        @else
            <div class="flex flex-col justify-center items-center">
                <h1 class="mb-4">You have no menus</h1>
                <a class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    href="/dashboard/menu/create">Create</a>
            </div>
        @endempty
</x-dashboard>
</x-layout>
