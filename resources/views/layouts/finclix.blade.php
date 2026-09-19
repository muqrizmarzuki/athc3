<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('meta_title', 'Al-Hijrah Training & Consultancy (AHTC) - Islamic Banking & Finance Specialist')</title>
    <meta name="description" content="@yield('meta_description', 'Al-Hijrah Training & Consultancy (AHTC) is a premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Islamic Banking Training, Islamic Finance Advisory, Shariah Compliance, Executive Leadership, AHTC Malaysia')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Al-Hijrah Training & Consultancy (AHTC)')">
    <meta property="og:description" content="@yield('og_description', 'Premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution.')">
    <meta property="og:image" content="{{ asset('assets/images/Primary-Logo-Trimmed.png') }}">

    <!-- Schema.org JSON-LD Structured Data for Organization -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "EducationalOrganization",
      "name": "Al-Hijrah Training & Consultancy",
      "alternateName": "AHTC",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/images/Primary-Logo-Trimmed.png') }}",
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+60192680787",
        "contactType": "customer service",
        "email": "admin@alhijrahtraining.com",
        "areaServed": "MY",
        "availableLanguage": ["en", "ms"]
      },
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "11-1, 1st Floor, Jalan Putra Mahkota 7/8C, Pusat Bandar Putra Point, Putra Heights",
        "addressLocality": "Subang Jaya",
        "addressRegion": "Selangor",
        "postalCode": "47650",
        "addressCountry": "MY"
      },
      "description": "Premier specialist learning and advisory firm dedicated to fostering excellence in Islamic Banking, finance, and organizational evolution."
    }
    </script>

    <!-- Stylesheets -->
    <link href="{{ asset('finclix/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('finclix/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('finclix/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/AHTC-Favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('assets/images/AHTC-Favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/AHTC-Favicon.png') }}">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ asset('finclix/js/jquery.js') }}"></script>
    <script src="{{ asset('finclix/js/popper.min.js') }}"></script>
    <script src="{{ asset('finclix/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('finclix/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('finclix/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('finclix/js/wow.js') }}"></script>
    <script src="{{ asset('finclix/js/appear.js') }}"></script>
    <script src="{{ asset('finclix/js/knob.js') }}"></script>
    <script src="{{ asset('finclix/js/swiper.min.js') }}"></script>
    <script src="{{ asset('finclix/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('finclix/js/parallaxie.js') }}"></script>
    <script src="{{ asset('finclix/js/gsap.js') }}"></script>
    <script src="{{ asset('finclix/js/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('finclix/js/gsap-split-text.js') }}"></script>
    <script src="{{ asset('finclix/js/split-type.min.js') }}"></script>
    <script src="{{ asset('finclix/js/script.js') }}"></script>
</body>
</html>
