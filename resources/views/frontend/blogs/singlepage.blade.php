@extends('frontend.layouts.app')
@section('body')

<main class="pt-5 mt-5 bg-white">
  <div class="container py-5" data-aos="fade-up">
    <article class="mx-auto w-100" >
      <header class="mb-4">
        <h1 class="mb-3 display-5 fw-bold text-dark">{{ $blog->title }}</h1>
        <p class="text-muted mb-1 fw-semibold">
          📅 Published: {{ $blog->created_at->format('jS M Y') }}
        </p>

        @if ($blog->views)
        <div class="d-flex align-items-center gap-1 text-muted mb-3">
          👁️ {{ $blog->views }}
        </div>
        @endif
      </header>

      <figure class="">
        <img src="{{ asset('/uploads/' . $blog->featured_image) }}" alt="featured_image"
          class="img-fluid rounded shadow-sm w-100" style="max-height: 70vh; object-fit: cover;">
      </figure>

      <section class="blog-content lh-lg fs-5">
        {!! $blog->description !!}
      </section>
    </article>

    {{-- Related Blogs --}}
    <div class="">
      <h2 class="mb-4 fw-bold fs-3">Related Blogs</h2>
         <div class="row " data-aos="fade-up" data-aos-delay="100">
      @foreach ($allblogs as $key => $blog)
      <div class="col-md-6 col-lg-4 mb-5">
        <a href="{{ route('single', $blog->slug) }}" class="text-decoration-none text-dark">
          <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden blog-card-hover" >
            <div class="ratio ratio-16x9" style="min-height: 300px;">
              <img src="{{ asset('/uploads/' . $blog->featured_image) }}" class="card-img-top object-contain" alt="{{ $blog->title }}">
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-3 text-muted small">
                <span>📅 {{ $blog->updated_at->format('jS M Y') }}</span>
                @if ($blog->views)
                <span class="d-flex align-items-center gap-1">
                  👁️ {{ $blog->views }}
                </span>
                @endif
              </div>
              <h5 class="card-title fw-semibold mb-3 fs-5 text-primary">{{ $blog->title }}</h5>
              <p class="card-text text-secondary fs-6">
                {!! Str::limit(strip_tags($blog->description), 120) !!}
              </p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    </div>
  </div>
</main>

{{-- Optional CSS for subtle hover --}}
<style>
  .blog-card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .blog-card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }

  .blog-content p {
    margin-bottom: 1rem;
  }
</style>
@endsection
