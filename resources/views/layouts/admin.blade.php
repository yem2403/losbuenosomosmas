<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'RelieveVZLA - Admin Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f3f4f5; 
        }
        ::-webkit-scrollbar-thumb {
            background: #e1e3e4; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #8f6f6d; 
        }
    </style>
    @stack('styles')
</head>
<body class="bg-background text-on-background min-h-screen flex font-body-md">
    <!-- SideNavBar -->
    <nav class="bg-surface-container-low dark:bg-inverse-surface docked left-0 h-full w-64 border-r border-outline-variant flat no shadows flex flex-col h-full p-md space-y-base hidden md:flex shrink-0">
        <!-- Header -->
        <div class="mb-lg flex flex-col items-start">
            <div class="text-headline-md font-headline-md font-black text-primary mb-sm">RelieveVZLA</div>
            <div class="flex items-center space-x-sm">
                <img alt="Usuario Admin" class="w-10 h-10 rounded-full object-cover border border-outline-variant" data-alt="A professional headshot of an administrative user in a brightly lit, high-contrast minimal environment, conveying authority and trust in a humanitarian setting. The aesthetic is clean, utilizing sharp focus and natural lighting with white and subtle red accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtoqSOm37SOgiO6AxiEZAXuVIQ3IuoBWXAwhZADppDyFV3ZD1OuKbK0ZYUJR5wSOky6qGUJ5F8hPjbbps5FGEUmzBoiTlFjtHa01fppqevDGj2KenVlNXzvRLMc2hSNy_i1m5WwuVKVLWbv6v33RvNXm1sCYMWGKi9EYz-JI0momYHMnWwJj13qNjS2nGZW0kR_s5cgConcPm0emgvqpryqhmjia6bGpEm-vw2L6Oqe1lK1sEb78FlQasi2WXf1ErOP8WArXDxEJQ6"/>
                <div>
                    <div class="font-label-bold text-label-bold text-secondary dark:text-secondary-fixed-dim">Admin Central</div>
                    <div class="font-label-sm text-label-sm text-on-surface-variant">Región Caracas</div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Tabs -->
        <div class="flex-grow space-y-xs">
            <a class="flex items-center space-x-md px-sm py-xs h-touch-target bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full Active: translate-x-1 transition-transform" href="#">
                <span class="material-symbols-outlined fill">dashboard</span>
                <span class="font-label-bold text-label-bold">Panel Control</span>
            </a>
            <a class="flex items-center space-x-md px-sm py-xs h-touch-target text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high hover:bg-surface-container-highest dark:hover:bg-outline-variant transition-all rounded-full" href="#">
                <span class="material-symbols-outlined">map</span>
                <span class="font-label-bold text-label-bold">Mapa Alertas</span>
            </a>
            <a class="flex items-center space-x-md px-sm py-xs h-touch-target text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high hover:bg-surface-container-highest dark:hover:bg-outline-variant transition-all rounded-full" href="#">
                <span class="material-symbols-outlined">database</span>
                <span class="font-label-bold text-label-bold">Gestión Datos</span>
            </a>
            <a class="flex items-center space-x-md px-sm py-xs h-touch-target text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high hover:bg-surface-container-highest dark:hover:bg-outline-variant transition-all rounded-full" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-bold text-label-bold">Configuración</span>
            </a>
        </div>
        
        <!-- CTA & Footer -->
        <div class="mt-auto pt-md space-y-md border-t border-outline-variant">
            <button class="w-full h-touch-target bg-primary text-on-primary font-label-bold text-label-bold rounded-full hover:bg-primary-container transition-colors flex justify-center items-center">
                Reportar Incidente
            </button>
            <a class="flex items-center space-x-md px-sm py-xs h-touch-target text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high hover:bg-surface-container-highest dark:hover:bg-outline-variant transition-all rounded-full" href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-bold text-label-bold">Cerrar Sesión</span>
            </a>
        </div>
    </nav>
    
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
        <!-- TopAppBar (Mobile Fallback / Header) -->
        <header class="bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline flat no shadows md:hidden flex justify-between items-center w-full px-container-margin h-touch-target">
            <div class="text-headline-md font-headline-md font-bold text-primary dark:text-inverse-primary">RelieveVZLA</div>
            <button class="text-on-surface-variant p-sm">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </header>
        
        <div class="flex-1 overflow-auto p-container-margin lg:p-lg space-y-lg">
            {{ $slot }}
        </div>
    </main>
    
    @stack('scripts')
</body>
</html>
