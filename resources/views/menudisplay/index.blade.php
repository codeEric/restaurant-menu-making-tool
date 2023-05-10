<x-layout title="Menu">
    <div class="h-full flex justify-center items-center bg-[url('/images/background.jpg')] bg-cover">
        <ul class="flex flex-col items-center space-y-4">
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/main">Main dishes</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/appetizers">Appetizers</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/salads">Salads</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/soups">Soups</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/kids">Kids</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/desserts">Desserts</x-menu-link>
            </li>
            <li>
                <x-menu-link url="/menu/{{ $menu->url }}/beverages">Beverages</x-menu-link>
            </li>
        </ul>
    </div>
</x-layout>
