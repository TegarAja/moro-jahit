<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <title>Moro Jahit</title>


        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            .logo-container {
                text-align: center;
                margin: 20px 0;
            }

            .logo-image {
                max-width: 100%;
                height: auto;
                width: 200px; /* Atur lebar sesuai kebutuhan Anda */
            }

            /* Tambahkan aturan media query untuk ukuran layar yang lebih besar */
            @media (min-width: 768px) {
                .logo-image {
                    width: 250px; /* Sesuaikan ukuran untuk layar yang lebih besar */
                }
            }

            @media (min-width: 1200px) {
                .logo-image {
                    width: 300px; /* Sesuaikan ukuran untuk layar yang sangat besar */
                }
            }
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="logo-container">
                <a href="/">
                    <img src="images/MOROJAHIT.png" alt="Moro Jahit Logo" class="logo-image">
                </a>
            </div>



            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
