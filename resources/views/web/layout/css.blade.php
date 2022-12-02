<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset($favicon->image) }}">

{{-- toaster --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!-- Sweet Alert-->
<link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />




<!-- Links Of CSS File -->
<link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/dark-mode.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">