@if($feedbacks -> count() > 0)    
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <!-- <h1 class="mb-5">Our Clients Say!!!</h1> -->
                <h1 class="mb-5">{{ $site_info->where('key_word', 'feedbacks_title')->first()->text }}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($feedbacks as $feedback)
                <div class="testimonial-item bg-white text-center border p-4">
                    @if($feedback->image == null)
                        <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="/public/images/demo-user.jpg" style="width: 80px; height: 80px;">
                    @else
                        <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="/public/storage/{{$feedback->image}}" style="width: 80px; height: 80px;">
                    @endif
                    <h5 class="mb-0">{{ $feedback->person_name }}</h5>
                    <p>{{ $feedback->country }}</p>
                    <p class="mb-0">{!! $feedback->text !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif