@if($head_image != []) 
<div class="container-fluid bg-primary py-5 mb-5 hero-header" 
    style='
            background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url( {{ $head_image["image"] }} );
            packground-repeat: no-repeat;
            background-size: cover;
    '>
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">

                <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $head_image["title"] }}</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">{!! $head_image["short_description"] !!}</p>

                <!-- <div class="position-relative w-75 mx-auto animated slideInDown">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endif