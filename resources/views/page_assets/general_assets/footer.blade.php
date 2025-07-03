<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <!-- <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a> -->

                    <a href="{{ route('index') }}" class="btn btn-link active">Home</a>
                    <a href="{{ route('about_us') }}" class="btn btn-link">About us</a>
                    <a href="{{ route('services') }}" class="btn btn-link">Services</a>
                    <a href="{{ route('gallery') }}" class="btn btn-link">Gallery</a>
                    <a href="{{ route('tours') }}" class="btn btn-link">Tours</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $site_info->where('key_word', 'address')->first()->text }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $site_info->where('key_word', 'phone_number')->first()->text }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $site_info->where('key_word', 'email')->first()->text }}</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">

                        <span style="display: none;">
                            {{ $num = 1 }}
                        </span>

                        @foreach ($gallery_photos as $gallery_photo)
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../public/{{ $gallery_photo->image }}" alt="{{ $gallery_photo->description }}" style="height: 75px;">
                            </div>

                            <span style="display: none;">
                                {{ $num++ }}
                            </span>

                            @if( $num > 6)
                                @break
                            @endif
                        @endforeach

                        <!-- <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('index') }}">{{ env('APP_NAME'), 'climbingcamp.ge' }},</a>
                        {{ $site_info->where('key_word', 'right_reserved_text')->first()->text }}
                        <!-- All Right Reserved. -->

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By  -->
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>