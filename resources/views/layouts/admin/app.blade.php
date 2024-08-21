<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- remix icon font css  -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/remixicon.css') }}">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/lib/bootstrap.min.css') }}">

  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    @routes
    @vite(['resources/js/adminapp.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <!-- JavaScript Libraries -->

   <!-- jQuery library js -->
  <script src="{{ asset('backend/assets/js/lib/jquery-3.7.1.min.js') }}"></script>
  <!-- Iconify Font js -->
  <script src="{{ asset('backend/assets/js/lib/iconify-icon.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('backend/assets/js/lib/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
