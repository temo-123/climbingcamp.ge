@if($tours -> count() > 0) 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <!-- <h1 class="mb-5">Touts</h1> -->
                <h1 class="mb-5">{{ $site_info->where('key_word', 'tours_title')->first()->text }}</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($tours as $tour)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/storage/{{$tour->image}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small> -->
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$tour->days}}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$tour->price}}</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$tour->price}}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{$tour->description}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route( 'tour_page', ['id' => $tour->id] ) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Read More</a>
                                <!-- <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a> -->
                                <!-- <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif