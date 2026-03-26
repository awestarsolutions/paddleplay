<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PaddlePlay Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@700;800&display=swap" rel="stylesheet">

        <!-- Scripts & Styles (CDN Fallback for local build issues) -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'surface': '#ffffff',
                            'tertiary': '#0a214d',
                            'primary-navy': '#0a214d',
                            'accent-blue': '#1e3a8a',
                        },
                        fontFamily: {
                            inter: ['Inter', 'sans-serif'],
                            manrope: ['Manrope', 'sans-serif'],
                        }
                    }
                }
            }
        </script>

        <style type="text/css">
            body { background-color: #ffffff; color: #1a202c; font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Manrope', sans-serif; font-weight: 800; }
            
            .btn-primary { background-color: #0a214d; color: white; padding: 0.75rem 1.5rem; border-radius: 0.125rem; font-weight: 500; transition: all 0.3s; text-transform: uppercase; font-size: 0.875rem; letter-spacing: 0.025em; display: inline-block; }
            .btn-primary:hover { background-color: #1e3a8a; }
            
            .btn-tertiary { background-color: #1e3a8a; color: white; padding: 0.75rem 1.5rem; border-radius: 0.125rem; font-weight: 500; transition: all 0.3s; text-transform: uppercase; font-size: 0.875rem; letter-spacing: 0.025em; display: inline-block; }
            .btn-tertiary:hover { background-color: #0a214d; }
            
            .card-architectural { background-color: white; padding: 2rem; transition: all 0.3s; border: 1px solid rgba(171, 180, 179, 0.15); }
            .card-architectural:hover { background-color: #fafafa; box-shadow: 0 32px 32px rgba(44,52,51,0.04); }
            
            .label-md { text-transform: uppercase; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; color: #1a202c; }
            .body-lg { font-size: 1.125rem; line-height: 1.75; color: #1a202c; }
            .body-md { font-size: 0.875rem; line-height: 1.625; color: #1a202c; }
        </style>
    </head>
    <body class="font-inter antialiased bg-[#ffffff] text-[#1a202c]">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white border-b border-[#abb4b3]/15">
                    <div class="max-w-7xl mx-auto py-10 px-6">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
