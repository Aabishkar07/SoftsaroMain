   <!-- About Section -->

   @php
       use App\Models\Page;
       $aboutus = Page::where('id', 1)->first();

   @endphp


<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Section -->
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <p class="text-muted fs-5 mb-4">
{!! $aboutus->third_description !!}        </p>
      </div>

      <!-- Image Section -->
      <div class="col-lg-6" data-aos="fade-left">
        <div class="position-relative">
          <img src="{{ asset('uploads/' . $aboutus->third_image) }}" class="img-fluid rounded-4 shadow" alt="About Nepbyte">
          <div class="position-absolute top-0 start-0 bg-primary rounded-end px-3 py-1 text-white small fw-medium shadow-sm" style="transform: translate(-20%, -50%);">
            Softsaro IT Solutions
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




   <section id="about" class="about section">

       <div class="container">
           <div class="row gy-4">
               <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                   <h3 style="color:#6a68AF" class="">About Us – Build Trust & Credibility</h3>
                   <img src="{{ asset('uploads/' . $aboutus->main_image) }}" class="img-fluid rounded-4 mb-4"
                       alt="">
                   <p class="fs-6">
                       {!! $aboutus->description !!}
                   </p>
               </div>
               <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                   <div class="content ps-0 ps-lg-5">
                       <p class=" fs-6 text-b">
                           {!! $aboutus->secondary_description !!}

                       </p>



                       <div class="position-relative mt-4">
                           <img src="{{ asset('uploads/' . $aboutus->secondary_image) }}" class="img-fluid rounded-4"
                               alt="">
                       </div>
                   </div>
               </div>
           </div>

       </div>

   </section><!-- /About Section -->


   <section class="py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10" data-aos="fade-up">
        <p class="text-muted fs-5 mb-4">
         {!! $aboutus->fourth_description !!}
        </p>

      </div>
    </div>
  </div>
</section>
