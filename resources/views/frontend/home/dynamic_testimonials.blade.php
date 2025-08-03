@if ($testimonials && $testimonials->count() > 0)
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
        .testimonials-section {
            background: transparent;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .testimonials-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            backdrop-filter: none;
        }

        .testimonials-container {
            position: relative;
            z-index: 2;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            color: #333;
        }

        .section-title h2 {
            font-family: 'Inter', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: none;
            position: relative;
            display: inline-block;
            color: #2d3748;
        }



        .section-title p {
            font-size: 1.1rem;
            color: #718096;
            font-weight: 400;
        }

        .testimonial-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 20px;
            padding: 40px;
            margin: 0 auto;
            max-width: 600px;
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(102, 126, 234, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 4rem;
            color: rgba(102, 126, 234, 0.2);
            font-family: serif;
            line-height: 1;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(102, 126, 234, 0.2);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .testimonial-content {
            font-size: 1rem;
            line-height: 1.7;
            color: #2d3748;
            margin-bottom: 25px;
            font-weight: 500;
            position: relative;
            z-index: 2;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(102, 126, 234, 0.2);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.15);
        }

        .author-info h4 {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: #1a202c;
            margin: 0 0 5px 0;
        }

        .author-info p {
            font-size: 0.9rem;
            color: #667eea;
            margin: 0;
            font-weight: 500;
        }

        .star-rating {
            margin-top: 8px;
        }

        .star-rating i {
            color: #f6ad55;
            font-size: 14px;
            margin-right: 2px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            border: none;
            transition: all 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            color: #ffffff;
            font-size: 18px;
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(102, 126, 234, 0.3);
            border: 2px solid rgba(102, 126, 234, 0.2);
            transition: all 0.3s ease;
        }

        .carousel-indicators [data-bs-target].active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-color: #667eea;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .testimonial-card {
                padding: 30px;
                margin: 0 auto;
                max-width: 100%;
            }

            .testimonial-content {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .testimonial-card {
                padding: 15px;
                margin: 5px;
            }

            .testimonial-content {
                font-size: 0.9rem;
            }

            .author-image {
                width: 50px;
                height: 50px;
            }

            .author-info h4 {
                font-size: 1rem;
            }

            .author-info p {
                font-size: 0.8rem;
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="testimonials-section">
        <div class="container testimonials-container">
            <div class="section-title fade-in">
                <h2>What Our Clients Say</h2>
                <p>Discover why businesses choose us for their digital success</p>
            </div>

            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $totalSlides = $testimonials->count();
                    @endphp

                    @foreach ($testimonials as $index => $testimonial)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 col-sm-12">
                                    <div class="testimonial-card fade-in">
                                        <div class="testimonial-content">
                                            {{ Str::limit($testimonial->description, 300) }}
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="{{ asset('uploads/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->name }}" class="author-image"
                                                onerror="this.src='{{ asset('img/defaultimage.jpg') }}'">
                                            <div class="author-info">
                                                <h4>{{ $testimonial->name }}</h4>
                                                <p>{{ $testimonial->designation }}</p>
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($totalSlides > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel"
                        data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel"
                        data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="carousel-indicators">
                        @for ($i = 0; $i < $totalSlides; $i++)
                            <button type="button" data-bs-target="#testimonialsCarousel"
                                data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"
                                aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $i + 1 }}">
                            </button>
                        @endfor
                    </div>
                @endif
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            // Auto-play carousel
            $('#testimonialsCarousel').carousel({
                interval: 5000,
                pause: 'hover'
            });

            // Add smooth transitions
            $('#testimonialsCarousel').on('slide.bs.carousel', function() {
                $('.testimonial-card').addClass('fade-in');
            });

            // Initialize tooltips if needed
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
@endif
