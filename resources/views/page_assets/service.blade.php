@if($services -> count() > 0)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <span class="text-primary mb-4 fa-3x">
                                <!-- <i class="fa fa-globe" aria-hidden="true"></i> -->
                                {!! $service->logo !!}
                            </span>
                            <h5>{{$service->title}}</h5>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif