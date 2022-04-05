<!-- BEGIN: Vendor JS-->
<script src="{{asset('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('admin/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/extensions/tether.min.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('admin/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('admin/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/modal/compon/**/ents-modal.js')}}"></script>
<!-- END: Page JS-->
<script src="{{asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/js/bootstrap_multiselect.js') }}"></script>
<script src="{{ asset('admin/app-assets/js/form_multiselect.js') }}"></script>
<script src="{{ asset('admin/app-assets/js/form_checkboxes_radios.js') }}"></script>
<script src="{{ asset('admin/app-assets/js/form_inputs.js') }}"></script>


@yield('more_scripts')
{{--<script >
    $(document).ready(function(){
        $('div.alert').delay(3000).fadeOut();
    });
</script>--}}



