
<!-- Links of JS File -->

<script src="{{ asset('web/js/jquery.min.js') }}"></script>
<script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('web/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('web/js/appear.min.js') }}"></script>
<script src="{{ asset('web/js/odometer.min.js') }}"></script>
<script src="{{ asset('web/js/wow.min.js') }}"></script>
<script src="{{ asset('web/js/jspdf.debug.js') }}"></script>
<script src="{{ asset('web/js/form-validator.min.js') }}"></script>
<script src="{{ asset('web/js/contact-form-script.js') }}"></script>
<script src="{{ asset('web/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('web/js/custom.js') }}"></script>


<!-- Sweet Alerts js -->
<script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

<!-- Tost-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>







<script>
    // $(document).ready(function(){
    //   var description = CKEDITOR.replace( 'description' );
    //   description.on( 'change', function( evt ) {
    //       $("#description").text( evt.editor.getData())    
    //   });
    // })
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
