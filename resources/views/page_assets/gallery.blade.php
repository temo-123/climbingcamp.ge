@if($gallery_photos -> count() > 0)
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
                <!-- <h1 class="mb-5">Ouer Gallery</h1> -->

                <h1 class="mb-5">{{ $site_info->where('key_word', 'gallery_title')->first()->text }}</h1>
            </div>
            <div class="row g-3">

                <span style="display: none;">
                    {{ $num = 1 }}
                </span>

                @foreach ($gallery_photos as $gallery_photo)
                <span style="display: none;">
                    @if ($num > 4) {{ $num = 1 }} @endif
                </span>

                    @if ( $num == 1)
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">
                    @endif
                            @if ( $num == 1 )
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="public/storage/{{ $gallery_photo->image }}"   alt="">
                                    <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div> -->
                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $gallery_photo->description }}</div>
                                </a>
                            </div>
                            @endif
                            @if ( $num == 2 )
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="public/storage/{{ $gallery_photo->image }}"   alt="">
                                    <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div> -->
                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $gallery_photo->description }}</div>
                                </a>
                            </div>
                            @endif
                            @if ( $num == 3 )
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="public/storage/{{ $gallery_photo->image }}"   alt="">
                                    <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div> -->
                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $gallery_photo->description }}</div>
                                </a>
                            </div>
                            @endif

                    @if ( $num == 3)
                        </div>
                    </div>
                    @endif

                    @if ( $num == 4 )
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px; visibility: visible; animation-delay: 0.7s; animation-name: zoomIn;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100" src="public/storage/{{ $gallery_photo->image }}"   alt="" style="object-fit: cover;">
                            <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div> -->
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $gallery_photo->description }}</div>
                        </a>
                    </div>
                    @endif


                    <span style="display: none;">
                        {{ $num++ }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
@endif

<!-- <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
            </div>
        </div>
    </div> -->