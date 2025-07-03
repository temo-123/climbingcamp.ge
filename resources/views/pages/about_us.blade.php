@extends('layouts.main')

@section('content')
    
    <!-- About Start -->
    @include('page_assets.about_us_block') 
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                    <h1>{{ $site_info->where('key_word', 'long_description_title')->first()->text }}</h1>
                    <p>{!! $site_info->where('key_word', 'long_description_text')->first()->text !!}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Start -->
    @include('page_assets.gallery') 
    <!-- Destination Start -->
     
@endsection