<nav class="z-50 w-full fixed transition ease-in-out" id="myNavbar">
    {{-- sebenernya ada add remove bg-secondary/70 di .js nya --}}
    <div class="bg-secondary/80 backdrop-blur"></div>
    <div class="mx-auto max-w-7xl px-2 lg:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center lg:items-stretch lg:justify-start">
                <div class="flex flex-shrink-0 items-center md:ml-28">
                    <img src="/img/logodema.png" alt="Logo Dema" class="w-10">
                    <h2 class="mx-3 md:mx-4 text-black font-jakarta font-semibold text-base md:text-lg">DEMA UNIDA
                        GONTOR
                    </h2>
                </div>
                <div class="hidden lg:ml-6 lg:block">
                    <div class="ml-10 flex gap-6 items-center">
                        <a href="/"
                            class="rounded-md px-3 py-2 text-sm font-normal {{ $active == 'beranda' ? 'text-dema' : 'text-black hover:text-dema' }} ">Home</a>
                        <a href="/departement"
                            class="rounded-md px-3 py-2 text-sm font-normal {{ $active == 'departement' ? 'text-dema' : 'text-black hover:text-dema' }}">Departement</a>
                        <a href="/ukm"
                            class="rounded-md px-3 py-2 text-sm font-normal {{ $active == 'ukm' ? 'text-dema' : 'text-black hover:text-dema' }}">UKM</a>
                        <a href="/blog"
                            class="rounded-md px-3 py-2 text-sm font-normal {{ $active == 'blog' ? 'text-dema' : 'text-black hover:text-dema' }}">PRESS
                            RELEASE</a>
                    </div>
                </div>
                <!-- SMALL NAV-->
                <div class="-mr-2 flex lg:hidden justify-end">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="relative inline-flex items-center justify-center my-3 rounded-md bg-slate-100 p-2 text-gray-800 hover:bg-slate-200 hover:text-slate-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5" id="mobile-hamburger"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        {{-- : --}}
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        {{-- X --}}
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            {{--  --}}
            <div class="hidden lg:block">
                <!-- Profile dropdown Button -->
                <div class="relative ml-3">
                    <div>
                        <button type="button"
                            class="relative flex max-w-xs items-center rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-dema focus:ring-offset-2 focus:ring-offset-dema hover:text-dema group"
                            aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5" id="user-menu-button"></span>
                            <span class="sr-only">Open user menu</span>
                            <span class="text-black font-normal px-3 py-2 group-hover:text-dema">Other Menu</span>
                        </button>
                    </div>
                    <!-- Dropdown menu *(lainnya) -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                        {{-- lainnya --}}
                        <a href="/about"
                            class="text-center block px-4 py-2 text-sm {{ $active == 'about' ? 'bg-slate-300 text-cyan-900' : 'text-cyan-700 hover:bg-slate-300 hover:text-cyan-900' }}">About
                            Us</a>
                        <a href="/contact"
                            class="text-center block px-4 py-2 text-sm {{ $active == 'contact' ? 'bg-slate-300 text-cyan-900' : 'text-cyan-700 hover:bg-slate-300 hover:text-cyan-900' }}">Contact
                            US</a>
                        <a href="/faq"
                            class="text-center block px-4 py-2 text-sm {{ $active == 'faq' ? 'bg-slate-300 text-cyan-900' : 'text-cyan-700 hover:bg-slate-300 hover:text-cyan-900' }}">FAQ</a>
                        {{-- Admin --}}
                        @auth
                            <hr class="border-2 border-primary">
                            <a href="/dashboard"
                                class="text-center block px-4 py-2 text-sm {{ $active == 'dashboard' ? 'bg-slate-300 text-cyan-900' : 'text-cyan-700 hover:bg-slate-300 hover:text-cyan-900' }}"><i
                                    class="fa-solid fa-table-columns"></i> Dashboard Admin</a>
                            {{-- Logout --}}
                            <form action="/logout" method="POST" id="logout-form">
                                @csrf
                                <button type="button" onclick="confirmLogout()"
                                    class="w-full block px-4 py-2 text-sm text-cyan-700 hover:bg-slate-300 hover:text-cyan-900"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"><i
                                        class="fa-solid fa-right-from-bracket"></i> Sign out</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    {{-- Dropdown small nav --}}
    <div class="lg:hidden hidden absolute bg-gray-100 z-60 w-[80%] right-0 mx-[1rem] rounded-md shadow-xl"
        id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 lg:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/"
                class="block rounded-md px-3 py-2 text-base font-medium  {{ $active == 'beranda' ? 'bg-gray-900 text-white' : 'text-gray-500 hover:bg-gray-700 hover:text-white' }}">Home</a>
            <a href="/blog"
                class="block rounded-md px-3 py-2 text-base font-medium {{ $active == 'blog' ? 'bg-gray-900 text-white' : 'text-gray-500 hover:bg-gray-Press Releasehover:text-white' }}">Press
                Release</a>
            <a href="/departement"
                class="block rounded-md px-3 py-2 text-base font-medium {{ $active == 'departement' ? 'bg-gray-900 text-white' : 'text-gray-500 hover:bg-gray-700 hover:text-white' }}">Departemen</a>
            <a href="/about"
                class="block rounded-md px-3 py-2 text-base font-medium {{ $active == 'about' ? 'bg-gray-900 text-white' : 'text-gray-500 hover:bg-gray-700 hover:text-white' }}">Abous
                Us</a>
            <a href="/lainnya"
                class="block rounded-md px-3 py-2 text-base font-medium {{ $active == 'lainnya' ? 'bg-gray-900 text-white' : 'text-gray-500 hover:bg-gray-700 hover:text-white' }}">
                Other Menu</a>
        </div>
        @auth
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="/img/avatar.jpg" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-gray-500">Nama</div>
                        <div class="text-sm font-medium leading-none text-gray-500">Email</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="/dashboard"
                        class="block rounded-md px-3 py-2 text-base font-medium {{ $active == 'dashboard' ? 'bg-gray-700 text-white' : 'text-gray-500 hover:bg-gray-700 hover:text-white' }}"><i
                            class="fa-solid fa-table-columns"></i> Dashboard
                        Admin</a>
                    <form action="/logout" method="POST" id="logout-form">
                        @csrf
                        <button type="button" onclick="confirmLogout()"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white"
                            role="menuitem" tabindex="-1" id="user-menu-item-2"><i
                                class="fa-solid fa-right-from-bracket"></i> Sign out</button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
