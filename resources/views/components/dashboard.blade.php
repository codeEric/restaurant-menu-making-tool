<header class="flex-initial">
    <nav class="flex flex-wrap items-center justify-between py-2 w-full md:py-0 px-4 text-lg text-gray-700 bg-white">
        <div>
            <a href="/dashboard/menu">
                Menu Tool
            </a>
        </div>
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class="text-base text-gray-700 md:flex md:justify-between  md:pt-0">
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="/dashboard/menu">Your menus</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="/dashboard/menu/create">Create new</a>
                </li>
            </ul>
        </div>
        <div>
            <a class="md:p-4 py-2 block text-red-400 hover:text-red-600" href="/logout">Sign out</a>
        </div>
    </nav>
</header>
<main class="bg-gray-200 flex-1 flex justify-center">
    {{ $slot }}
</main>
