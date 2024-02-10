
<!DOCTYPE html>
<html lang="en">        
    @include('backend-views.Partiels.head')
    <!--begin::Body-->
    <body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
        <!--begin::Theme mode setup on page load-->
            <script>
                var defaultThemeMode = "light";
                var themeMode;

                if ( document.documentElement ) {
                    if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                    } else {
                        if ( localStorage.getItem("data-bs-theme") !== null ) {
                            themeMode = localStorage.getItem("data-bs-theme");
                        } else {
                            themeMode = defaultThemeMode;
                        }			
                    }

                    if (themeMode === "system") {
                        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                    }

                    document.documentElement.setAttribute("data-bs-theme", themeMode);
                }            
            </script>
        <!--end::Theme mode setup on page load-->                   
        <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">          
                @include('backend-views.Partiels.header')
                <!--begin::Wrapper-->
                <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                    @include('backend-views.Partiels.sidebar')
                        <!--begin::Main-->
                        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                            @yield('content')
                            @include('backend-views.Partiels.footer')
                        </div>
                        <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
        @include('backend-views.Partiels.scripts')
    </body>
    <!--end::Body-->
</html>