<header class="flex-initial">
    <nav
        class="
       flex flex-wrap
       items-center
       justify-between
       w-full
       py-4
       md:py-0
       px-4
       text-lg text-gray-700
       bg-white
     ">
        <div>
            <a href="/dashboard">
                Menu Tool
            </a>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>

        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul
                class="
           pt-4
           text-base text-gray-700
           md:flex
           md:justify-between 
           md:pt-0">
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="/dashboard">Your menus</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="/dashboard/create">Create new</a>
                </li>
            </ul>
        </div>
        <div>
            <a class="md:p-4 py-2 block text-red-400 hover:text-red-600" href="#">Sign out</a>
        </div>
    </nav>
</header>
<main class="bg-gray-200 flex-1 flex justify-center">
    {{ $slot }}
</main>
