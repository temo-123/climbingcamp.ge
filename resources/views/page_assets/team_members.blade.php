@if($team_members -> count() > 0)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <!-- <h1 class="mb-5">Our Teame</h1> -->
                <h1 class="mb-5">{{ $site_info->where('key_word', 'team_members_title')->first()->text }}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($team_members as $member)
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                            @if($member->image == null)
                                <img class="img-fluid" src="/public/storage/global_images/demo-user.jpg" alt="{{ $member->name }}">
                            @else
                                <img class="img-fluid" src="/public/storage/{{$member->image}}"  alt="{{ $member->name }}">
                            @endif
                        </div>
                        <!-- <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> -->
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{ $member->name }}</h5>
                            <small>{!! $member->description !!}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif