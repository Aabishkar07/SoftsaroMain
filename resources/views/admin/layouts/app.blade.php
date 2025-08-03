<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="{{ asset('img/cropped-Fab-icon-32x32.jpg') }}" rel="icon">

    @include('admin.links.style')
    @include('admin.links.javascript')
    <title>Softsaro | Admin</title>
</head>

<body>
    <div x-cloak x-data="{ sidebarOpen: true }" class="relative flex">

        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'w-52' : 'w-14'"
            class="fixed top-0 left-0 h-full bg-white shadow-lg z-[1000] overflow-hidden transition-[width] duration-700">
            @include('admin.layouts.sidebar')
        </div>

        <!-- Main Content Wrapper -->
        <main :class="sidebarOpen ? 'ml-52' : 'ml-14'"
            class="flex-1 w-full min-h-screen overflow-auto transition-[margin-left] duration-700">

            <!-- Fixed Navbar under Sidebar -->
            <div class="fixed top-0 left-0 right-0 z-[999] bg-[#eeeef7]">
                <div :class="sidebarOpen ? 'ml-52' : 'ml-14'"
                    class="flex justify-end pr-4 transition-[margin-left] duration-700">
                    @include('admin.layouts.navbar')
                </div>
            </div>

            <!-- Page Content -->
            <div class="w-full py-8  mt-8 bg-white">
                @yield('content')
            </div>
        </main>
    </div>







</body>


</html>
