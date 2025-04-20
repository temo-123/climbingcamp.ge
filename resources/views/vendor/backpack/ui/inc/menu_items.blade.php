{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Services" icon="" :link="backpack_url('service')" />
<x-backpack::menu-item title="Tours" icon="" :link="backpack_url('tour')" />
<x-backpack::menu-item title="Team Members" icon="" :link="backpack_url('team_member')" />
<x-backpack::menu-item title="Feedbacks" icon="" :link="backpack_url('feedback')" />

<x-backpack::menu-item title="Photo Gallery" icon="" :link="backpack_url('photo_gallery')" />
<x-backpack::menu-item title="Video Gallery" icon="" :link="backpack_url('video_gallery')" />

<x-backpack::menu-item title="Site info" icon="" :link="backpack_url('site_info')" />