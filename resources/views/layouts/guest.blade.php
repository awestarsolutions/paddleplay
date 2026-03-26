<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts & Styles (CDN Fallback) -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            body { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #1a202c; }
            svg { max-width: 80px; max-height: 80px; }
            .min-h-screen { min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; }
            .bg-gray-100 { background-color: #f8fafc; }
            .bg-white { background-color: #ffffff; border: 1px solid rgba(171, 180, 179, 0.2); }
            .shadow-md { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); }
            .rounded-lg { border-radius: 0.5rem; }
            .mt-6 { margin-top: 1.5rem; }
            .w-full { width: 100%; }
            .sm\:max-w-md { max-width: 28rem; }
            .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-[#0a214d]" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
