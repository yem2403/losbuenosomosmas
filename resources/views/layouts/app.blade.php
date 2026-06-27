<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'RelieveVZLA' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    @stack('styles')
</head>
<body class="{{ $bodyClass ?? 'bg-background text-on-background antialiased min-h-screen flex flex-col' }}">
    @if (isset($header) && $header !== false)
        @include('components.header', ['showSearch' => $showSearch ?? true, 'showButton' => $showButton ?? true])
    @endif

    <main class="{{ $mainClass ?? 'flex-grow flex flex-col items-center justify-center py-xl px-container-margin md:px-lg max-w-7xl mx-auto w-full' }}">
        @yield('content')
    </main>

    @if (isset($footer) && $footer !== false)
        @include('components.footer')
    @endif

    @stack('scripts')
</body>
</html>
