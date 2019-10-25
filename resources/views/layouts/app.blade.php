<!doctype html>
<html lang="en" class="no-focus">
    <head>
        @include('includes.head')
    </head>
    <body>

        @include('sweetalert::alert')

        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

            @include('includes.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->

            <!-- END Header -->
            @include('includes.header')
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    @yield('main-content')
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('includes.footer')
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        @include('includes.scripts')
    </body>
</html>
