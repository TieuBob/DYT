<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Info -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Site favicon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="/images/site/{{ isset(settings()->site_favicon) ? settings()->site_favicon : '' }}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/backend/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/backend/vendors/styles/style.css" />
    @stack('styles')

</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="">
                    <img src="/images/site/{{ isset(settings()->site_logo) ? settings()->site_logo : '' }}"
                        alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="/backend/vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="/backend/vendors/scripts/core.js"></script>
    <script src="/backend/vendors/scripts/script.min.js"></script>
    <script src="/backend/vendors/scripts/process.js"></script>
    <script src="/backend/vendors/scripts/layout-settings.js"></script>
    @stack('scripts')
</body>

</html>
