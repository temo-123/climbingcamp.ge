{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Feedbacks" icon="" :link="backpack_url('feedbacks')" />
<x-backpack::menu-item title="Services" icon="" :link="backpack_url('services')" />
<x-backpack::menu-item title="Site info" icon="" :link="backpack_url('site_info')" />
<x-backpack::menu-item title="Photo gallery" icon="" :link="backpack_url('photo_gallery')" />
<x-backpack::menu-item title="Video gallery" icon="" :link="backpack_url('video_gallery')" />