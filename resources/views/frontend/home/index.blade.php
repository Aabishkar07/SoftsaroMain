@extends('frontend.layouts.app')
@section('body')


@include('frontend.home.landing')
@include('frontend.home.about')
@include('frontend.home.porject')
@include('frontend.home.service')

@include('frontend.home.fact')
@include('frontend.home.feature')
@include('frontend.home.moreservices')

@include('frontend.home.testimonial')

@include('frontend.home.team')



{{-- @include('frontend.home.blog') --}}
@include('frontend.home.contact')



@endsection
