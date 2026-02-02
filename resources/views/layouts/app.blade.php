<!DOCTYPE html>
<html lang="id">
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>@yield('title', 'BAPPERIDA Kota Bogor')</title>

    <!-- Tailwind / Vite -->
    @vite('resources/css/app.css')

    <!-- ================= FONT AWESOME v6 (WAJIB UNTUK LOGO X) ================= -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <!-- ====================================================================== -->

</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- NAVBAR -->
    @include('layouts.nav')


    <!-- CONTENT -->
    <main class="flex-1">
        @yield('content')
    </main>


    <!-- FOOTER -->
    @include('layouts.footer')


</body>
</html>
