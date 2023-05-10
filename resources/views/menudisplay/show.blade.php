<x-layout title="Menu">
    <div class="h-full flex items-center justify-center bg-[url('/images/background.jpg')] bg-cover">
        <div class="bg-gray-200 w-full md:w-full lg:w-1/2 h-3/4 flex flex-col items-center">
            <h1 class="text-xl font-bold pt-4 pb-3">
                {{ \App\Models\Category::where('key', '=', $category)->get()[0]->value }}
            </h1>
            <div class="flex flex-col w-full px-3 space-y-5 overflow-x-scroll pb-5">
                @foreach ($menuItems as $menuItem)
                    <x-menu-item-card :item="$menuItem" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
