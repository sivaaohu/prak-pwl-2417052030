<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <!-- Link CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    {{-- Komponen Navbar --}}
    @include('components.navbar')

    {{-- Konten Utama Halaman --}}
    <main class="container flex-grow-1 my-4">
        @yield('content')
    </main>

    {{-- Komponen Footer --}}
    @include('components.footer')

    <!-- Script JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>