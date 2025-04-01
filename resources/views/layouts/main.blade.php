<!DOCTYPE html>
<html lang="en">

@include('layouts.head') 

<body>
    @include('page_assets.general_assets.navbar') 

    @include('page_assets.general_assets.navbar_menu') 

        @yield('content')

    @include('page_assets.general_assets.footer') 

    @include('layouts.scripts') 
</body>

</html>