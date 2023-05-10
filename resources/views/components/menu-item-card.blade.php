@props(['item'])
<div class="flex w-full h-24 bg-gray-300">
    <div class="flex-shrink-0 h-full">
        <img class="h-full" src="{{ asset('storage/menu-items/' . $item->image) }}" alt="item">
    </div>
    <div class="w-full px-2 flex justify-between overflow-hidden">
        <div class="w-48">
            <h1 class="text-md font-bold">{{ $item->name }}</h1>
            <p class="text-xs break-words">{{ $item->description }}</p>
        </div>
        <div class="my-auto w-12 text-sm font-bold">
            @if ($item->smprice > 0)
                <span>Small:</span>
                <h2>{{ $item->smprice }}&euro;</h2>
            @endif
            @if ($item->lgprice > 0)
                <span>Large:</span>
                <h2>{{ $item->lgprice }}&euro;</h2>
            @endif
        </div>
    </div>
</div>
