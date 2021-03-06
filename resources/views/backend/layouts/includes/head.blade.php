<head>
    <meta charset="utf-8" />
    <title>Empty Page | Keenthemes</title>
    <!-- <meta name="description" content="Page with empty content" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    @if (App::getLocale() =='ar')
    <link href="{{asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('backend/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('backend/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('backend/media/logos/favicon.ico')}}" />
    @else
    <link href="{{asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('backend/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('backend/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('backend/media/logos/favicon.ico')}}" />
    @endif

    @yield('css')
</head>
