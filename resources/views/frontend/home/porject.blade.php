<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<section id="clients" class="clients section light-background">
    <div class="container" data-aos="fade-up">
      <div class="owl-carousel owl-theme">

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
        </div>

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
        </div>

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
        </div>

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
        </div>

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
        </div>

        <div class="item client-logo">
          <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section><!-- /Clients Section -->

  <script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        items: 6,
        margin: 30,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          },
          1200: {
            items: 6
          }
        }
      });
    });
  </script>
