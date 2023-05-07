<x-layout title="{{ $menuItems[0]->menu->name . ' - menu items' }}">
    <x-dashboard>
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-semibold leading-tight">{{ $menuItems[0]->menu->name }} - menu items</h2>
                    <a href="/dashboard/menu/menu-items/create"
                        class="bg-green-500 flex justify-center items-center text-black uppercase font-semibold text-xs p-1 rounded-md hover:bg-green-600">
                        <span class="material-symbols-outlined text-4xl text-white">add</span>
                    </a>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Dish image
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Dish name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Dish description
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Dish category
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menuItems as $menuItem)
                                    <tr>
                                        <td class="px-5 py-5 bg-white text-sm">
                                            <div class="flex">
                                                <div class="flex-shrink-0 w-12 h-12">
                                                    {{ $menuItem->image }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 bg-white text-sm">
                                            <h1 class="text-lg font-bold">{{ $menuItem->name }}</h1>
                                        </td>
                                        <td class="px-5 py-5 bg-white text-sm">
                                            <p>{{ $menuItem->description }}</p>
                                        </td>
                                        <td class="px-5 py-5 bg-white text-sm">
                                            <p>{{ $menuItem->category }}</p>
                                        </td>
                                        <td class="py-5 bg-white text-sm text-right">
                                            <div class="flex space-x-3">
                                                <a href="/dashboard/menu/menu-items/{{ $menuItem->id }}/edit"
                                                    class="bg-yellow-500 flex justify-center items-center text-black uppercase font-semibold text-xs p-1 rounded-md hover:bg-yellow-600">
                                                    <span class="material-symbols-outlined text-white">edit</span>
                                                </a>
                                                <form action="/dashboard/menu/menu-items/{{ $menuItem->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('Delete')
                                                    <button
                                                        class="bg-red-500 flex justify-center items-center text-black uppercase font-semibold text-xs p-1 rounded-md hover:bg-red-600">
                                                        <span
                                                            class="material-symbols-outlined text-white">delete_forever</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-dashboard>
</x-layout>
