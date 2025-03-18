@extends('frontend.layouts.app')
@section('body')

<div class="mt-5 pt-5">
    <style>
        .plan-card {
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease-in-out;
            border: 2px solid transparent;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            text-align: center;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .plan-card:hover {
            transform: translateY(-10px);
            border-color: #6a68AF;
            box-shadow: 0px 15px 30px rgba(0, 123, 255, 0.2);
        }
        .badge-popular {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: #6a68AF;
            color: white;
            padding: 8px 18px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 20px;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.2);
        }
        .plan-price {
            background: #6a68AF;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 20px;
            display: inline-block;
            margin-top: 10px;
        }
        .plan-card ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        .plan-card ul li {
            padding: 8px 0;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-primary {
            background: #6a68AF;
            border: none;
            transition: all 0.3s ease-in-out;
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background: #5a5baF;
            transform: scale(1.05);
        }
        .store-banner {
            width: 100%;
            height: 300px;
            background: url('{{ asset('img/stats-bg.jpg') }}') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            padding: 0 20px;
           background:black;
        }

        @media (max-width: 768px) {
            .store-banner {
                font-size: 20px;
                height: 250px;
            }
            .plan-card {
                padding: 20px;
            }
            .plan-card ul li {
                font-size: 14px;
            }
            .plan-price {
                font-size: 18px;
            }
            .btn-primary {
                font-size: 14px;
            }
        }
    </style>

    <div class="store-banner">SoftSaro Store - Elevate Your Digital Experience</div>

    <div class="bg-light d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <h2 class="fw-bold text-center">Welcome to SoftSaro Store</h2>
            <p class="text-muted text-center">Your one-stop destination for premium software solutions. Get access to top-quality tools tailored for your business needs.</p>

            <div class="row justify-content-center g-4 mt-5">
                @foreach ($stores as $store)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="plan-card position-relative">
                        <span class="badge-popular">Best Seller</span>
                        <h5 class="fw-bold pt-4">{{ $store->title }}</h5>
                        <span class="plan-price">Rs {{ $store->price }}</span>
                        <ul class="mt-4 fw-bold">
                            @foreach(json_decode($store->service) as $feature)
                            <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('storesingle' , $store->slug) }}">
                            <button class="btn btn-primary w-100 mt-3">View More</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
