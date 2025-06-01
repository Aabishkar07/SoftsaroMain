<div x-clock x-data="{ sidebarOpen = true }">
    <div x-cloak x-show="sidebarOpen" class="fixed inset-0 z-20 hidden transition-opacity pointer-events-none lg:block">
    </div>

    <!-- Overlay for Small Screens -->
    <div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false"
        class="fixed inset-0 z-10 block bg-black opacity-50 lg:hidden"></div>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <div x-data="handleSwipe()" x-cloak
        :class="sidebarOpen ? 'translate-x-0 ease-out w-64 lg:w-64' : '-translate-x-full ease-in'"
        @touchstart="touchStart" @touchend="touchEnd"
        class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-white border"
        style="height: calc(100% - [footer-height]px);">
        <div>
            <nav class="mt-24">
                <a class="{{ request()->segment(2) == 'dashboard' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.dashboard') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                        <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                        <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                        <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>

                <a class="{{ request()->segment(2) == 'banner' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.banner.index') }}
                     ">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M15 8h.01" />
                        <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v7" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l.5 .5" />
                        <path d="M15 19l2 2l4 -4" />
                    </svg>


                    <span class="mx-3">banner</span>
                </a>

                <a class="{{ request()->segment(2) == 'partners' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.partners.index') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>

                    <span class="mx-3">Clients</span>
                </a>

                <a class="{{ request()->segment(2) == 'store' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.store.index') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path
                            d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                        </path>
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                    </svg>

                    <span class="mx-3">softsaro Store</span>
                </a>
                <a class="{{ request()->segment(2) == 'product' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.product.index') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path d="M10 16v-8h2.5a2.5 2.5 0 1 1 0 5h-2.5"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    </svg>
                    <span class="mx-3">softsaro Product</span>
                </a>


                <a class="{{ request()->segment(2) == 'productenquire' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.productenquire.index') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                        </path>
                        <path d="M10 16h6"></path>
                        <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M4 8h3"></path>
                        <path d="M4 12h3"></path>
                        <path d="M4 16h3"></path>
                    </svg>

                    <span class="mx-3"> Product Enquire</span>
                </a>
                <a class="{{ request()->segment(2) == 'csvs' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.csvs.index') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                        stroke-width="1.25">
                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                        </path>
                        <path d="M10 16h6"></path>
                        <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M4 8h3"></path>
                        <path d="M4 12h3"></path>
                        <path d="M4 16h3"></path>
                    </svg>

                    <span class="mx-3"> Email Marketing (CSV file)</span>
                </a>

                <a class="{{ request()->segment(2) == 'contacts' ? ' bg-[#6a68AF] text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-[#6a68AF] hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="
                    {{ route('admin.contact') }}
                     ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                    </svg>

                    <span class="mx-3">Contacts</span>
                </a>


            </nav>
        </div>
    </div>
</div>
