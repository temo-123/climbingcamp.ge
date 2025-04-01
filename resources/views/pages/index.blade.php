@extends('layouts.main')

@section('content')

    <!-- About Start -->
    @include('page_assets.about_us_block') 
    <!-- About End -->

    <!-- Service Start -->
    @include('page_assets.service') 
    <!-- Service End -->

    <!-- Destination Start -->
    @include('page_assets.gallery') 
    <!-- Destination Start -->

    <!-- Package Start -->
    @include('page_assets.tours') 
    <!-- Package End -->

    <!-- Booking Start -->
    @include('page_assets.index_form') 
    <!-- Booking Start -->

    <!-- Team Start -->
    @include('page_assets.team_members') 
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('page_assets.feedbacks') 
    <!-- Testimonial End -->
        
@endsection