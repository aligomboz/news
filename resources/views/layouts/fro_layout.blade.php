<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Time</title>
    <!-- plugin css for this page -->
    @include('front.includes.style')
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            @include('front.includes.header')

            <!-- partial -->
            <div class="flash-news-banner">
                <div class="container">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <span class="badge badge-dark mr-3">Flash news</span>
                            <p class="mb-0">
                                Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s.
                            </p>
                        </div>
                        <div class="d-flex">
                            <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                            <span class="text-danger">30°C,London</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container">
                  @yield('content')
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            @include('front.includes.footer')

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
   @include('front.includes.script')
    <!-- End custom js for this page-->
</body>

</html>
