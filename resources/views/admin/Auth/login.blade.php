<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="/dist/tailwind.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-bottom-right",
    };

    tailwind.config = {
        theme: {
            extend: {
                // colors: {
                //     primary: '#00783b',
                //     secondary: '#f07516',
                // }
                colors: {
                    primary: '#ff1a1a',
                    secondary: '#3939ac',
                }
            },
            screens: {
                'xs': '320px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '1299px': '1299px',
            },
        }
    }
</script>



</head>

<body>
    <div class="flex justify-center pt-20">
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="flex flex-col border rounded-lg p-10 w-[30vw]">
                <p class="text-2xl font-semibold text-center text-slate-700 pb-5">
                    Login
                </p>
                <label for="username">Email</label>
                <input type="text" name="email" id="username"
                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-green-500 hover:border-black">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-green-500 hover:border-black">
                <div class="flex justify-center mt-5">
                    <button type="submit"
                        class="border mt-3 border-primary py-1 w-[100%] rounded-md mr-2 text-white bg-green-700  ">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
