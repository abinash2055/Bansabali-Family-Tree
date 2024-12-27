<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.header')

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body>
    @include('frontend.layouts.navbar')

    @yield('content')

    @include('frontend.layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6fTjMQmWf+gNR3tfd9F1xQpJ0MRdAu8D3tDboz0CvPO7HbQ+8Gh" crossorigin="anonymous">
    </script>

    @stack('scripts')
</body>

</html>
