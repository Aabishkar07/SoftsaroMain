@extends('frontend.layouts.app')

@section('body')

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title pt-5 mt-5" data-aos="fade-up">
        <h2 class="fw-bold text-center display-5 text-primary">Softsaro Store</h2>
        <p class="text-muted text-center lead">Select Your Ideal Website Layout & Theme</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row gy-4 isotope-container justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <!-- Portfolio Item -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-light">
                        <img src="{{ asset('img/portfolio/saurya krishi.jpg') }}" class="img-fluid" alt="Saurya Krishi">

                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-dark mb-2">{{ $store->title }}</h5>
                            <!-- Buttons Row -->
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button class="btn btn-outline-dark fw-bold px-4 py-2 shadow-sm rounded-pill">
                                    Enquire Now
                                </button>
                                <a href="https://sauryakrishicompany.com.np/" target="_blank" class="btn btn-primary px-4 py-2 shadow-sm rounded-pill">
                                    <i class="bi bi-eye"></i> See Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- /Portfolio Section -->

@endsection
