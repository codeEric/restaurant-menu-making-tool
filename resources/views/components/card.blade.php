@props(['name', 'id'])
<div class="w-40 h-28 flex flex-col items-center justify-between py-4 border border-gray-600 rounded-xl drop-shadow-md">
    <p>Menu name: <span class="font-bold">{{ $name }}</span></p>
    <p>
        <a href="/dashboard/menu/{{ $id }}/edit"
            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-6 rounded-md hover:bg-blue-600">Edit
            menu</a>
    </p>
</div>
