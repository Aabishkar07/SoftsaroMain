    <!-- Team Section -->
    <section id="team" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p style="color:#6a68AF">CHECK OUR TEAM</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-5 justify-content-center">
                @foreach ($teams as $key => $team)
                    @if ($key < 2)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic">
                                    <img src="{{ asset('uploads/' . $team->image) }}" class="img-fluid grayscale"
                                        alt="{{ $team->name }}">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team->name }}</h4>
                                    <span class="">{{ $team->designation }}</span>
                                    <div class="social">
                                        @if ($team->website)
                                            <a target="_blank" href="{{ $team->website }}"><i
                                                    class="bi bi-globe text-black"></i></a>
                                        @endif
                                        @if ($team->linkedin)
                                            <a target="_blank" href="{{ $team->linkedin }}"><i
                                                    class="bi bi-linkedin text-black"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- Centered Top Two Members -->


                {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('img/team/santosh.png') }}" class="img-fluid grayscale"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Santosh Rajbanshi</h4>
                            <span class="">Chief Executive Officer</span>
                            <div class="social">
                                <a target="_blank" href="https://www.linkedin.com/in/santosh-rajbanshi-878552152/"><i
                                        class="bi bi-linkedin text-black"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="row gy-5 justify-content-center mt-2">
                <!-- Centered Bottom Three Members -->
                @foreach ($teams as $key => $team)
                    @if ($key > 1)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img src="{{ asset('uploads/' . $team->image) }}"
                                        class="img-fluid grayscale" alt="{{ $team->name }}"></div>
                                <div class="member-info">
                                    <h4>{{ $team->name }}</h4>
                                    <span class="">{{ $team->designation }}</span>
                                    <div class="social">
                                        @if ($team->website)
                                            <a target="_blank" href="{{ $team->website }}"><i
                                                    class="bi bi-globe text-black"></i></a>
                                        @endif
                                        @if ($team->linkedin)
                                            <a target="_blank" href="{{ $team->linkedin }}"><i
                                                    class="bi bi-linkedin text-black"></i></a>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('img/team/aabishkar.png') }}"
                                    class="img-fluid grayscale" alt=""></div>
                            <div class="member-info">
                                <h4>Aabishkar Shrestha</h4>
                                <span class="">FullStack Developer</span>
                                <div class="social">
                                    <a target="_blank" href="https://www.aabishkarshrestha.com.np/"><i
                                            class="bi bi-globe text-black"></i></a>
                                    <a href="https://www.linkedin.com/in/aabishkar-shrestha-550545247/"
                                        target="_blank"><i class="bi bi-linkedin text-black"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('img/team/rohan.png') }}" class="img-fluid grayscale"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Rohan Shrestha</h4>
                                <span class="">UI/UX & Graphic Designer</span>
                                <div class="social">
                                    <a target="_blank" href="https://www.rohanshrestha2005.com.np/"><i
                                            class="bi bi-globe text-black"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/rohan-shrestha-33153030a/"><i
                                            class="bi bi-linkedin text-black"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div><!-- End Centered Bottom Three Members -->

            <style>
                .grayscale {
                    filter: grayscale(100%);
                    transition: 0.3s ease-in-out;
                    cursor: pointer;
                }

                .grayscale:hover {
                    filter: grayscale(0%);
                }
            </style>
        </div>


    </section><!-- /Team Section -->
