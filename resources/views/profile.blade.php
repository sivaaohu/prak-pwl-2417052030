<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Profile</title>
</head>

<body
    class="bg-cover bg-center bg-fixed"
    style="background-image: url('/images/bs.jpeg');"
>
    <div class="min-h-screen flex items-center justify-center">
<img
    src="/images/pgn.png"
    alt="Kartun"
    class="absolute -right--10 bottom-135 w-70 z-0 animate-peek"
>
        <!-- Bingkai utama -->
        <div class="relative bg-white w-96 p-8 rounded-2xl shadow-xl border-2 border-dark blue-300 text-center">

            <!-- Foto -->
            <img
                src="/images/fotogw.jpg"
                alt="Foto Profile"
                class="w-32 h-32 rounded-full mx-auto mb-5 object-cover border-4 border-darkblue-400 "
            >

            <!-- Nama -->
            <div class="bg-blue-200 border border-black-300 rounded-lg px-6 py-3 mb-3">
                <p class="font-semibold text-gray-800">
                    Siva Sinaga
                </p>
            </div>

            <!-- Kelas -->
            <div class="bg-green-200 border border-dark blue-300 rounded-lg px-6 py-3 mb-3">
                <p class="font-semibold text-gray-800">
                    S1 Sistem Informasi
                </p>
            </div>

            <!-- NPM -->
            <div class="bg-white-200 border border-dark green-300 rounded-lg px-6 py-3">
                <p class="font-semibold text-gray-800">
                    2417052030
                </p>
            </div>

        </div>

    </div>

</body>
</html>