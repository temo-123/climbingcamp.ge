
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5"
                style="
                    background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url( {{$site_image->where('key_word', 'message_img')->first()->image}} );
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
            ">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <!-- <h6 class="text-white text-uppercase">Booking</h6> -->
                        <h1 class="text-white mb-4">{{ $site_info->where('key_word', 'message_form_title')->first()->text }}</h1>
                        <p class="mb-4">{!! $site_info->where('key_word', 'message_form_text')->first()->text !!}</p>
                        <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                        <!-- <a class="btn btn-outline-light py-3 px-5 mt-2" href="" style="background-color: #6c757da3;" >Read More</a> -->
                    </div>
                    <div class="col-md-6">
                        <!-- <h1 class="text-white mb-4">Book A Tour</h1> -->
                        <form action="{{ route('mail') }}" id="demo-form" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label class="form-label" for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="surname" type="text" class="form-control bg-transparent" id="surname" placeholder="Your Surname" required>
                                        <label class="form-label" for="surname">Your Surname</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" required>
                                        <label class="form-label" for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="country" type="text" class="form-control bg-transparent" id="country" placeholder="country" data-target="#date3" data-toggle="country" required />
                                        <label class="form-label" for="country">Country</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="city" type="text" class="form-control bg-transparent" id="city" placeholder="city" data-target="#date3" data-toggle="city" required />
                                        <label class="form-label" for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name='message' class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px" required></textarea>
                                        <label class="form-label" for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3 form-btn"
                                            
                                            g-recaptcha="true"
                                            data-recaptcha-sitekey="6Ldkq30rAAAAAHfsotKZHMrm9cigOQXFAIGY03JV"
                                            data-sitekey="6Ldkq30rAAAAAHfsotKZHMrm9cigOQXFAIGY03JV" 
                                            data-callback='onSubmit' 
                                            data-action='submit'
                                    >Book Now</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>