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

    <div x-data="handleSwipe()" x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out w-52 lg:w-52' : 'w-14 ease-in'"
        @touchstart="touchStart" @touchend="touchEnd"
        class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-[#04033b] "
        style="height: calc(100% - [footer-height]px);">
        <div>
            <nav class=" ">
                <div class="text-white bg-[#020123] p-3  flex gap-x-2 items-center      font-medium text-lg rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-shield">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                        <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    </svg>
                    <div x-show="sidebarOpen">

                        Admin
                    </div>
                </div>
                <div class="mx-2 pt-2 space-y-1.5">




                    <a class="{{ request()->segment(2) == 'dashboard' ? 'font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item ' : '  rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.dashboard') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                            <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1">
                            </path>
                            <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1">
                            </path>
                            <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1">
                            </path>
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs">Home</span>
                    </a>

                    <a class="{{ request()->segment(2) == 'blogs' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                   {{ route('admin.blogs.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z" />
                            <path
                                d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z" />
                            <path
                                d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z" />
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs">Posts</span>
                    </a>

                    <a class="{{ request()->segment(2) == 'banner' ? 'font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.banner.index') }}
                     ">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M15 8h.01" />
                            <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v7" />
                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                            <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l.5 .5" />
                            <path d="M15 19l2 2l4 -4" />
                        </svg>


                        <span x-show="sidebarOpen" class="mx-3 text-xs">Banner</span>
                    </a>

                    <a class="{{ request()->segment(2) == 'contacts' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="{{ route('admin.contact') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="currentColor"
                            class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs">Contacts</span>
                    </a>

                    <a class="{{ request()->segment(2) == 'partners' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.partners.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs">Clients</span>
                    </a>



                    {{-- <a class="{{ request()->segment(2) == 'store' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.store.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="20" height="20"
                            stroke-width="1.25">
                            <path
                                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                            </path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs">softsaro Store</span>
                    </a>
                    <a class="{{ request()->segment(2) == 'product' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.product.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="20"
                            height="20" stroke-width="1.25">
                            <path d="M10 16v-8h2.5a2.5 2.5 0 1 1 0 5h-2.5"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        </svg>
                        <span x-show="sidebarOpen" class="mx-3 text-xs">softsaro Product</span>
                    </a>
                    <a class="{{ request()->segment(2) == 'productenquire' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.productenquire.index') }}
                     ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="20"
                            height="20" stroke-width="1.25">
                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                            </path>
                            <path d="M10 16h6"></path>
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 8h3"></path>
                            <path d="M4 12h3"></path>
                            <path d="M4 16h3"></path>
                        </svg>

                        <span x-show="sidebarOpen" class="mx-3 text-xs"> Product Enquire</span>
                    </a> --}}


                    <a class="{{ request()->segment(2) == 'csvs' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="
                    {{ route('admin.csvs.index') }}
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

                        <span x-show="sidebarOpen" class="mx-3 text-xs"> Email Marketing (CSV file)</span>
                    </a>





                    <a class="{{ request()->segment(2) == 'settings' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="{{ route('admin.setting') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>



                        <span x-show="sidebarOpen" class="mx-3 text-xs">Settings</span>
                    </a>

                    <a class="{{ request()->segment(2) == 'teams' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="{{ route('admin.teams.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>



                        <span x-show="sidebarOpen" class="mx-3 text-xs">Teams</span>
                    </a>
                    <a class="{{ request()->segment(2) == 'services' ? ' font-semibold  rounded bg-[#8380d4] text-white flex items-center px-2 py-1.5  flex-1  item  ' : 'rounded flex-1  item hover:bg-[#6a68AF] hover:text-white flex items-center px-2 py-1.5  text-white' }} "
                        href="{{ route('admin.services.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>



                        <span x-show="sidebarOpen" class="mx-3 text-xs">Services</span>
                    </a>

                </div>


            </nav>
        </div>
    </div>
    <!-- Fixed Button Container -->

    <div class="fixed bottom-2 z-40 w-5 ">
        <div :class="sidebarOpen ? 'translate-x-0 ease-out w-52 ' : 'w-14 ease-in'">
            <div class="bg-[#020123]  flex justify-center items-center ">

                <button @click="sidebarOpen = !sidebarOpen" class="text-white bg-[#020123] focus:outline-none">
                    <div
                        class="bg-[#020123] py-2 text-center font-medium text-lg rounded-xl shadow-lg transition-transform duration-300">
                        <div
                            :class="sidebarOpen ? 'block transition ease-in-out duration-300' :
                                'rotate-180 transition ease-in-out duration-300'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="#ffffff"
                                viewBox="0 0 384 512">
                                <path
                                    d="M380.6 81.7c7.9 15.8 1.5 35-14.3 42.9L103.6 256 366.3 387.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3l-320-160C6.8 279.2 0 268.1 0 256s6.8-23.2 17.7-28.6l320-160c15.8-7.9 35-1.5 42.9 14.3z" />
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

</div>
