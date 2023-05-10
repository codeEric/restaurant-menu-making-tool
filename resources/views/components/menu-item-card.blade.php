@props(['item'])
<div class="flex w-full bg-gray-300">
    <div class="flex-shrink-0 w-24 h-full">
        <img src="{{ asset('storage/menu-items/' . $item->image) }}" alt="item">
    </div>
    <div class="w-full px-2 flex justify-between">
        <div class="w-48">
            <h1 class="text-md font-bold">{{ $item->name }}</h1>
            <p class="text-xs break-words">{{ $item->description }}</p>
        </div>
        <div class="my-auto w-12">
            <h2 class="text-sm font-bold">{{ $item->price }}&euro;</h2>
        </div>
    </div>
</div>
