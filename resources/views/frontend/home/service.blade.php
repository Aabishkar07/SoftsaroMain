<!-- Services Section -->

<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p style="color:#6a68AF">Featured Services<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

            @foreach ($services as $service)
                <!-- Web Development Service -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('uploads/' . $service->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon text-white p-3">
                                <img src="{{ asset('uploads/' . $service->icon) }}" class="img-fluid" alt="">
                            </div>
                            <p class="stretched-link">
                            <h3>{{ $service->title }}</h3>
                            </p>
                            <p class="fs-6">{{ $service->description }}</p>
                        </div>
                    </div>
                </div><!-- End Web Development -->
            @endforeach

            <!-- Web Development Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/web.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>Web Development</h3>
                        </p>
                        <p class="fs-6">We specialize in creating responsive and modern websites, ensuring your
                            business stands out online.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End Web Development -->

            <!-- App Development Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/app.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>App Development</h3>
                        </p>
                        <p class="fs-6">Building high-quality mobile applications tailored to your business needs for
                            both Android and iOS.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End App Development -->

            <!-- Domain & Hosting Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/hosting.jfif') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-server"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>Domain & Hosting</h3>
                        </p>
                        <p class="fs-6">Get reliable domain registration and hosting services for your business
                            website with high uptime.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End Domain & Hosting -->

            <!-- Digital Marketing Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/digital marketing.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>Digital Marketing</h3>
                        </p>
                        <p class="fs-6">We offer digital marketing strategies to increase your brand's visibility and
                            grow your online presence.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End Digital Marketing -->

            <!-- SEO Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/services-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>SEO</h3>
                        </p>
                        <p class="fs-6">Optimize your website to rank higher on search engines and reach a larger
                            audience.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End SEO -->

            <!-- UI/UX Design Service -->
            {{-- <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('img/uiux.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <p class="stretched-link">
                        <h3>UI/UX Design</h3>
                        </p>
                        <p class="fs-6">We design user-friendly and visually appealing interfaces for seamless user
                            experiences.</p>
                    </div>
                </div>
            </div> --}}
            <!-- End UI/UX Design -->

        </div>

    </div>

</section><!-- /Services Section -->
