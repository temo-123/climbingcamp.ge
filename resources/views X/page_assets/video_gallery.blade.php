@if($gallery_videos -> count() > 0)
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Promo video</h6>
                <h1 class="mb-5">Video</h1>
            </div>
            <div class="row g-3">
                @foreach ($gallery_videos as $video)
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.7s">
                        {!! $video->video_url !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif