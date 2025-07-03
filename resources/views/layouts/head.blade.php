
<head>
    <meta charset="utf-8">
    <title>{{ $site_info->where('key_word', 'site_title')->first()->text }}</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $site_info->where('key_word', 'site_title')->first()->text }}" name="keywords">
    <meta content="{{ $site_info->where('key_word', 'site_text')->first()->text }}" name="description">
    <meta content="{{ $site_image->where('key_word', 'header_image')->first()->image }}" name="image">

    <meta name="twitter:title" content="{{ $site_info->where('key_word', 'site_title')->first()->text }}">
    <meta name="twitter:description" content="{{ $site_info->where('key_word', 'site_text')->first()->text }}">
    <meta name="twitter:image" content="{{ $head_image['image'] }}">
    <meta name="twitter:card" content="{{ $head_image['image'] }}">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://some-url" />
    <meta property="og:title" content="{{ $site_info->where('key_word', 'site_title')->first()->text }}" />
    <meta property="og:description" content="{{ $site_info->where('key_word', 'site_text')->first()->text }}" />
    <meta property="og:image" content="{{ $head_image['image'] }}" />

    <!-- Favicon -->
    <link href="public/images/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
</head>