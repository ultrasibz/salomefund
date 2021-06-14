
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = null;
    // var KTAppSettings = {
    //     "breakpoints": {
    //         "sm": 576,
    //         "md": 768,
    //         "lg": 992,
    //         "xl": 1200,
    //         "xxl": 1400
    //     },
    //     "colors": {
    //         "theme": {
    //             "base": {
    //                 "white": "#ffffff",
    //                 "primary": "#3699FF",
    //                 "secondary": "#E5EAEE",
    //                 "success": "#1BC5BD",
    //                 "info": "#8950FC",
    //                 "warning": "#FFA800",
    //                 "danger": "#F64E60",
    //                 "light": "#E4E6EF",
    //                 "dark": "#181C32"
    //             },
    //             "light": {
    //                 "white": "#ffffff",
    //                 "primary": "#E1F0FF",
    //                 "secondary": "#EBEDF3",
    //                 "success": "#C9F7F5",
    //                 "info": "#EEE5FF",
    //                 "warning": "#FFF4DE",
    //                 "danger": "#FFE2E5",
    //                 "light": "#F3F6F9",
    //                 "dark": "#D6D6E0"
    //             },
    //             "inverse": {
    //                 "white": "#ffffff",
    //                 "primary": "#ffffff",
    //                 "secondary": "#3F4254",
    //                 "success": "#ffffff",
    //                 "info": "#ffffff",
    //                 "warning": "#ffffff",
    //                 "danger": "#ffffff",
    //                 "light": "#464E5F",
    //                 "dark": "#ffffff"
    //             }
    //         },
    //         "gray": {
    //             "gray-100": "#F3F6F9",
    //             "gray-200": "#EBEDF3",
    //             "gray-300": "#E4E6EF",
    //             "gray-400": "#D1D3E0",
    //             "gray-500": "#B5B5C3",
    //             "gray-600": "#7E8299",
    //             "gray-700": "#5E6278",
    //             "gray-800": "#3F4254",
    //             "gray-900": "#181C32"
    //         }
    //     },
    //     "font-family": "Poppins"
    // };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('')}}plugins/global/plugins.bundle.js"></script>
<script src="{{asset('')}}plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{asset('')}}js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('')}}plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('')}}js/pages/widgets.js"></script>
<script src="{{asset('')}}js/pages/custom/wizard/wizard-3.js"></script>
<script src="{{asset('js/pages/features/miscellaneous/toastr.js')}}"></script>

<!--end::Page Scripts-->
@livewireScripts
<script type="text/javascript">
    $(document).ready(function () {
        Livewire.on('alert', message => {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success(message);
        })
    })
</script>
</body>
<!--end::Body-->
</html>
