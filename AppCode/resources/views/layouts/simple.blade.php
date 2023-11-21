<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>


    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/logos/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/logos/favicon.ico') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/amethyst.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    <style>
        .theme--light.v-application {
            /* remove background color */
            background-color: transparent !important;
        }
    </style>

</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'remember-theme'                            Remembers active color theme between pages using localStorage (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

        DARK MODE

            'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
        -->
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-sm-2">
                    <span>Powered By</span>
                    <img src="{{ asset("media/logos/logo.png") }}" class="img-fluid" style="width: 115px" alt="">
                </div>

                {{-- <div class="col-sm-2">

                    <select class="form-select" onchange="langChanged(this)">
                        <option value="en" {{  app()->getLocale() == 'en' ? 'selected' : '' }}>
                            English</option>
                        <option value="es" {{  app()->getLocale() == 'es' ? 'selected' : '' }}>
                            Español</option>
                    </select>
                </div> --}}

            </div>
        </div>
    </footer>
    <!-- END Footer -->

    <!--
            OneUI JS

            Core libraries and functionality
        -->
    <script src="{{ asset('js/oneui.app.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Laravel Scaffolding JS -->
    <!-- <script src="{{ asset('/js/laravel.app.js') }}"></script> -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    <script>

        function langChanged(e){
            window.location.href = "{{ route('home.langChange') }}" + "?lang=" + e.value;
        }
    </script>

    @yield('js_after')
</body>

</html>
