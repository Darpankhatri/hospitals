<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset($favicon->image) }}">

<!-- App css -->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-default-stylesheet" />
<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="{{ asset('admin/assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-dark-stylesheet" />
<link href="{{ asset('admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="app-dark-stylesheet" />

{{-- data table --}}
{{-- <link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('admin/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" /> --}}
{{-- data table --}}



<!-- icons -->
<link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

{{-- toaster --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!-- Sweet Alert-->
<link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


<style>
    #btn-back-to-top {
        border-radius: 50%;
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }
</style>
 {{-- toggle switch --}}
<style>
    HTML CSSResult Skip Results Iframe EDIT ON *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, ".SFNSText-Regular", "Helvetica Neue", "Roboto", "Segoe UI", sans-serif;
    }

    .toggle {
        cursor: pointer;
        display: inline-block;
    }

    .toggle-switch {
        display: inline-block;
        background: rgb(230, 6, 6);
        border-radius: 16px;
        width: 58px;
        height: 32px;
        position: relative;
        vertical-align: middle;
        transition: background 0.25s;
    }

    .toggle-switch:before,
    .toggle-switch:after {
        content: "";
    }

    .toggle-switch:before {
        display: block;
        background: linear-gradient(to bottom, #fff 0%, #eee 100%);
        border-radius: 50%;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 4px;
        left: 4px;
        transition: left 0.25s;
    }

    .toggle:hover .toggle-switch:before {
        background: linear-gradient(to bottom, #fff 0%, #fff 100%);
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.5);
    }

    .toggle-checkbox:checked+.toggle-switch {
        background: #56c080;
    }

    .toggle-checkbox:checked+.toggle-switch:before {
        left: 30px;
    }

    .toggle-checkbox {
        position: absolute;
        visibility: hidden;
    }

    .toggle-label {
        margin-left: 5px;
        position: relative;
        top: 2px;
    }
</style>