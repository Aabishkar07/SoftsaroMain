{{-- <section class="flex items-center justify-between px-6 py-4 bg-white border-b-2 border-gray-200 ">
    <div class="flex items-center justify-between space-x-3 ">
        <div class="">
            <button @click="sidebarOpen = !sidebarOpen" class="w-8 text-black focus:outline-none lg:block">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class=" md:col-span-1 lg:col-span-2">
            <div class="flex items-center text-2xl font-bold text-green-700 gap-x-2">
                <img src="{{ asset('img/softsarologo.png') }}" alt="logo" class='w-36' />
            </div>
        </div>


    </div>
    <div class="flex gap-x-2">

        <div class="relative  h-9 w-9  mr-3">
            <button class="relative block overflow-hidden  h-9 w-9 focus:outline-none">
                <img class="object-cover w-full h-full " src="{{ asset('icons/menu.png') }}" alt="tagphoto">
            </button>


        </div>
        <div x-data="{ dropdownOpen: false }" class="relative shadow-[0_3px_10px_rgb(0,0,0,0.2)] h-9 w-9 rounded-full mr-3">
            <button @click="dropdownOpen = ! dropdownOpen"
                class="relative block overflow-hidden rounded-full h-9 w-9 focus:outline-none">
                <img class="object-cover w-full h-full " src="{{ asset('img/cropped-Fab-icon-32x32.jpg') }}"
                    alt="tagphoto">
            </button>

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full">
            </div>

            <div x-cloak x-show="dropdownOpen"
                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">

                <a href="{{ route('admin.logout') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
            </div>
        </div>
    </div>
</section> --}}

<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false, rightSidebarOpen: false }" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Right Sidebar Example</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="">

        <!-- Top Navbar Section -->
        <section class="flex  justify-end items-center px-6 py-2  border-b-2 border-gray-200">


            <!-- Right Icons -->
            <div class="flex gap-x-2">
                <!-- Right Sidebar Open Button -->
                <div class="relative h-6 w-6 mr-3">
                    <button @click="rightSidebarOpen = true"
                        class="relative block overflow-hidden h-6 w-6 focus:outline-none">
                        <img class="object-cover w-full h-full" src="{{ asset('icons/menu.png') }}" alt="tagphoto">
                    </button>
                </div>

                <!-- User Dropdown -->
            </div>
            <div x-data="{ dropdownOpen: false }" class="relative shadow-[0_3px_10px_rgb(0,0,0,0.2)] h-6 w-6 rounded-full mr-3">
                <button @click="dropdownOpen = !dropdownOpen"
                    class="relative block overflow-hidden rounded-full h-6 w-6 focus:outline-none">
                    <img class="object-cover w-full h-full" src="{{ asset('img/cropped-Fab-icon-32x32.jpg') }}"
                        alt="user">
                </button>

                <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                    class="fixed inset-0 z-10 w-full h-full"></div>

                <div x-cloak x-show="dropdownOpen"
                    class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                    <a href="{{ route('admin.logout') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                </div>
            </div>
        </section>

    </div>
    <!-- Right Sidebar Overlay and Panel -->
    <div x-cloak x-show="rightSidebarOpen" class="fixed inset-0 z-40" x-transition>
        <!-- Overlay Background -->
        <div @click="rightSidebarOpen = false" class="absolute inset-0 bg-black bg-opacity-30"></div>

        <!-- Sidebar Panel -->
        <div class="absolute right-0 top-0 h-full w-64 bg-white shadow-xl transition-transform transform"
            x-transition:enter="transition ease-out duration-700" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
            <div class="flex items-center justify-between px-4 py-3 border-b">
                <h2 class="text-lg font-semibold">Sidebar Title</h2>
                <button @click="rightSidebarOpen = false"
                    class="text-gray-500 hover:text-black text-2xl font-bold">&times;</button>
            </div>
            <div class="p-4 space-y-3">

                <ul class="text-sm space-y-2">
                    <a class="  hover:text-[#201d67] flex-col justify-center text-center items-center px-6 py-1.5  text-[#201d67]"
                        href=" {{ route('admin.store.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-center ml-10 flex justify-center items-center" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path
                                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                            </path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                        </svg>

                        <span class="mx-3 text-sm">softsaro Store</span>
                    </a>
                    <a class="{{ request()->segment(2) == 'product' ? ' font-semibold  rounded bg-[#fafafc] text-[#201d67] flex items-center px-6 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-white hover:text-[#201d67] flex items-center px-6 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.product.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path d="M10 16v-8h2.5a2.5 2.5 0 1 1 0 5h-2.5"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        </svg>
                        <span class="mx-3 text-sm">softsaro Product</span>
                    </a>


                    <a class="{{ request()->segment(2) == 'productenquire' ? ' font-semibold  rounded bg-[#fafafc] text-[#201d67] flex items-center px-6 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-white hover:text-[#201d67] flex items-center px-6 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.productenquire.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                            </path>
                            <path d="M10 16h6"></path>
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 8h3"></path>
                            <path d="M4 12h3"></path>
                            <path d="M4 16h3"></path>
                        </svg>

                        <span class="mx-3 text-sm"> Product Enquire</span>
                    </a>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
