<x-layout title="Edit menu - Dashboard">
    <x-dashboard>
        <div class="flex flex-col items-center w-96 pt-12">
            <h1 class="text-2xl font-bold">Edit menu</h1>
            <form action="/dashboard/{{ $menu->id }}" method="POST">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $menu->id }}">
                <x-form.input name="name" placeholder="Name" value="{{ $menu->name }}" autocomplete="off" />
                <div class="flex items-center justify-between">
                    <a href="/dashboard"
                        class="mt-6 flex justify-center items-center border border-green-400 text-black uppercase font-semibold text-xs py-2 px-8 mr-12 rounded-md hover:bg-green-600 hover:text-white hover:border-white">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Back
                    </a>
                    <x-form.submit>Save</x-form.submit>
                </div>
            </form>
            <h2 class="text-xl font-bold mt-6">Actions</h2>
            <div class="flex flex-col justify-center space-y-6 mt-4">
                <a href="/dashboard/menu/menu-items/{{ $menu->id }}"
                    class="w-full bg-green-500 flex justify-center items-center text-black uppercase font-semibold text-xs py-2 px-8 mr-12 rounded-md hover:bg-green-600">
                    <span class="material-symbols-outlined">add</span>
                    Add new item to menu
                </a>

                <form action="/dashboard/menu/{{ $menu->id }}" method="POST">
                    @csrf
                    @method('Delete')
                    <button
                        class="w-full bg-red-500 flex justify-center items-center text-black uppercase font-semibold text-xs py-2 px-8 mr-12 rounded-md hover:bg-red-600">
                        <span class="material-symbols-outlined">delete_forever</span>
                        Delete menu
                    </button>
                </form>

                {{-- <a href='{{ "/dashboard/menu/$menu->id/qr" }}'
                    class="w-full h-10 bg-blue-500 flex justify-center items-center text-black uppercase font-semibold text-xs py-2 px-8 mr-12 rounded-md hover:bg-blue-600">
                    Generate QR code
                </a> --}}

                <a href='{{ "/menu/$menu->url" }}'
                    class="w-full h-10 bg-blue-500 flex justify-center items-center text-black uppercase font-semibold text-xs py-2 px-8 mr-12 rounded-md hover:bg-blue-600">
                    Show menu
                </a>

                <div>
                    {!! QrCode::size(300)->generate("http://restaurant-menu-making-tool.test/$menu->url") !!}
                </div>


            </div>
        </div>
    </x-dashboard>
</x-layout>
