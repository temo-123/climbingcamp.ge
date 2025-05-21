
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <!-- <h6 class="text-white text-uppercase">Booking</h6> -->
                        <h1 class="text-white mb-4">{{ $site_info->where('key_word', 'message_title')->first()->text }}</h1>
                        <p class="mb-4">{{ $site_info->where('key_word', 'message_description')->first()->text }}</p>
                        <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                        <!-- <a class="btn btn-outline-light py-3 px-5 mt-2" href="" style="background-color: #6c757da3;" >Read More</a> -->
                    </div>
                    <div class="col-md-6">
                        <!-- <h1 class="text-white mb-4">Book A Tour</h1> -->
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent" id="qountry" placeholder="Qountry" data-target="#date3" data-toggle="qountry" />
                                        <label for="qountry">Qountry</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent" id="city" placeholder="city" data-target="#date3" data-toggle="city" />
                                        <label for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" style="background-color: #6c757da3;" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>