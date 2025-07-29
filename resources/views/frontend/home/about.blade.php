   <!-- About Section -->

    @php
    use App\Models\Page;
 $aboutus = Page::where('id', 1)->first();


@endphp
   <section id="about" class="about section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 style="color:#6a68AF" class="">About Us – Build Trust & Credibility</h3>
          <img src="{{ asset('uploads/'. $aboutus->main_image) }}" class="img-fluid rounded-4 mb-4" alt="">
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
              <img src="{{ asset('uploads/'. $aboutus->secondary_image) }}" class="img-fluid rounded-4" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

