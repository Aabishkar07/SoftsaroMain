<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Softsaro Nepal</title>
   
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">


       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


       <link href="lib/animate/animate.min.css" rel="stylesheet">
       <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

       <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
       <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>


<body>

    <div class="font-roboto">
        <div class="sticky top-0  z-[888] ">
            @include('Frontend.layouts.navbar')
        </div>

        <div class="">
            @yield('body')
        </div>

        <div class="">
            @include('frontend.layouts.footer')
        </div>

    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</html>
