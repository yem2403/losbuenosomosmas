<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>RelieveVZLA - Vista Pública</title>
<!-- Tailwind CSS Config -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#6ffbbe",
                        "surface-container-low": "#f3f4f5",
                        "surface-container": "#edeeef",
                        "primary-fixed-dim": "#ffb3ad",
                        "primary": "#b61722",
                        "outline": "#8f6f6d",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#adc6ff",
                        "secondary-container": "#2170e4",
                        "tertiary": "#006947",
                        "on-secondary-fixed": "#001a42",
                        "inverse-on-surface": "#f0f1f2",
                        "secondary-fixed": "#d8e2ff",
                        "surface-tint": "#b91a24",
                        "on-tertiary-fixed-variant": "#005236",
                        "on-secondary-container": "#fefcff",
                        "inverse-surface": "#2e3132",
                        "surface-dim": "#d9dadb",
                        "on-primary-fixed": "#410004",
                        "secondary": "#0058be",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "on-surface": "#191c1d",
                        "on-surface-variant": "#5b403e",
                        "on-secondary-fixed-variant": "#004395",
                        "outline-variant": "#e4beba",
                        "background": "#f8f9fa",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#ffdad7",
                        "tertiary-fixed-dim": "#4edea3",
                        "primary-container": "#da3437",
                        "on-background": "#191c1d",
                        "on-primary-container": "#fffbff",
                        "inverse-primary": "#ffb3ad",
                        "tertiary-container": "#00855b",
                        "surface": "#f8f9fa",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#f5fff6",
                        "surface-container-high": "#e7e8e9",
                        "on-tertiary-fixed": "#002113",
                        "surface-variant": "#e1e3e4",
                        "surface-bright": "#f8f9fa",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-fixed-variant": "#930013"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-margin": "16px",
                        "md": "16px",
                        "touch-target": "48px",
                        "xl": "40px",
                        "lg": "24px",
                        "xs": "4px",
                        "sm": "8px",
                        "gutter": "16px",
                        "base": "4px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter", "sans-serif"],
                        "label-bold": ["Inter", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "display-lg-mobile": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "label-sm": ["Inter", "sans-serif"],
                        "headline-md": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "display-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-bold": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "display-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* bg-background */
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline flat no shadows docked full-width top-0 sticky z-50">
<div class="flex justify-between items-center w-full px-container-margin h-touch-target max-w-7xl mx-auto">
<!-- Brand / Logo -->
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-inverse-primary" data-icon="emergency" data-weight="fill" style="font-variation-settings: 'FILL' 1;">emergency</span>
<span class="text-headline-md font-headline-md font-bold text-primary dark:text-inverse-primary tracking-tight">RelieveVZLA</span>
</div>
<!-- Navigation Links (Desktop) -->
<nav class="hidden md:flex gap-lg">
<a class="text-primary dark:text-inverse-primary border-b-2 border-primary dark:border-inverse-primary pb-1 font-label-bold text-label-bold hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors" href="#">Publico</a>
<a class="text-on-surface-variant dark:text-surface-variant font-label-bold text-label-bold hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors" href="#">Admin</a>
</nav>
<!-- Trailing Action -->
<div class="flex items-center gap-4">
<button class="hidden md:flex items-center justify-center h-touch-target px-md rounded bg-primary text-on-primary font-label-bold text-label-bold hover:bg-primary-container transition-colors shadow-sm">
                    Solicitar Ayuda
                </button>
<button class="md:hidden flex items-center justify-center h-touch-target w-touch-target rounded bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm">
<span class="material-symbols-outlined" data-icon="add" data-weight="fill" style="font-variation-settings: 'FILL' 1;">add</span>
</button>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-grow w-full max-w-7xl mx-auto px-container-margin py-lg flex flex-col gap-lg">
<!-- Header / Context -->
<div class="flex flex-col gap-xs mb-md">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface">Panel de Monitoreo Ciudadano</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Situación en tiempo real de recursos y emergencias activas.</p>
</div>
<!-- KPI Section -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-md w-full">
<!-- KPI 1: Peticiones Activas (Rojo/Error) -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-lg flex flex-col gap-sm relative overflow-hidden group hover:bg-surface-container-low transition-colors">
<div class="absolute left-0 top-0 bottom-0 w-[4px] bg-error"></div>
<div class="flex justify-between items-start">
<span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Peticiones Activas</span>
<span class="material-symbols-outlined text-error" data-icon="warning" data-weight="fill" style="font-variation-settings: 'FILL' 1;">warning</span>
</div>
<div class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-error">142</div>
<div class="font-label-sm text-label-sm text-on-surface-variant mt-2 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="trending_up">trending_up</span>
                    +12 desde ayer
                </div>
</div>
<!-- KPI 2: Peticiones Atendidas (Verde/Tertiary) -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-lg flex flex-col gap-sm relative overflow-hidden group hover:bg-surface-container-low transition-colors">
<div class="absolute left-0 top-0 bottom-0 w-[4px] bg-tertiary"></div>
<div class="flex justify-between items-start">
<span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Peticiones Atendidas</span>
<span class="material-symbols-outlined text-tertiary" data-icon="check_circle" data-weight="fill" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<div class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-tertiary">856</div>
<div class="font-label-sm text-label-sm text-on-surface-variant mt-2 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="update">update</span>
                    Última actualización hace 5 min
                </div>
</div>
</section>
<!-- Main Layout: Map & Feed Grid -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-lg w-full items-start">
<!-- Interactive Map Container (2/3 width on desktop) -->
<div class="lg:col-span-2 flex flex-col gap-sm bg-surface-container-lowest border border-outline-variant rounded-lg p-md">
<div class="flex justify-between items-center mb-sm">
<h2 class="font-headline-md text-headline-md text-on-surface">Mapa Nacional</h2>
<div class="flex gap-sm">
<span class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-2 py-1 rounded">
<span class="w-2 h-2 rounded-full bg-error inline-block"></span> Emergencias
                        </span>
<span class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-2 py-1 rounded">
<span class="w-2 h-2 rounded-full bg-secondary inline-block"></span> Recursos
                        </span>
</div>
</div>
<div class="w-full h-[400px] md:h-[500px] rounded-lg overflow-hidden border border-outline-variant relative bg-surface-container-high">
<!-- Map Image Placeholder -->
<img alt="Mapa de Venezuela" class="object-cover w-full h-full grayscale opacity-80" data-alt="A stylized, high-contrast satellite map view centered on Venezuela, designed for a modern dashboard UI in light mode. The map features minimal terrain details, primarily using off-white and light gray tones. Vivid red and bright blue data points and glowing marker icons are scattered across the map, indicating active alerts and resource hubs. The overall aesthetic is clean, professional, and utilitarian, suitable for a humanitarian or logistics monitoring interface." data-location="Venezuela" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWBL6xhQc_T4QvbwDlfxiXn1uQYfc8Qo_vK35Xl9opj1n65jgwPtvEE_JBpWzX5oClEvfS-hd0BNkXM4o4tsrXmkueZ2uoVYG2M59fXTkUlf2fLePdFuHEPa1ciuc76yd0izKwgGsPgGPIU-bahlAl759R2ZbLksl9xkzkgBCOw9qEf5n-A0ugSZZoJuIgN2nrT44oJ8dfus2PdhvXX08nv6EOYEen7yohqxF3AGQNIgu48WD4kmMQBtuaQzVj6eq6C0j1eua40V3n"/>
<!-- Simulated Pins Overlay -->
<div class="absolute inset-0 w-full h-full pointer-events-none">
<!-- Red Pin 1 -->
<div class="absolute top-[30%] left-[45%] transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
<div class="w-4 h-4 bg-error rounded-full animate-pulse"></div>
</div>
<!-- Red Pin 2 -->
<div class="absolute top-[45%] left-[60%] transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
<div class="w-3 h-3 bg-error rounded-full animate-pulse opacity-75"></div>
</div>
<!-- Blue Pin 1 -->
<div class="absolute top-[25%] left-[48%] transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
<div class="w-4 h-4 bg-secondary rounded-full shadow-sm"></div>
</div>
<!-- Blue Pin 2 -->
<div class="absolute top-[50%] left-[55%] transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
<div class="w-3 h-3 bg-secondary rounded-full shadow-sm"></div>
</div>
</div>
</div>
</div>
<!-- Alerts Feed Container (1/3 width on desktop) -->
<div class="flex flex-col gap-sm bg-surface-container-lowest border border-outline-variant rounded-lg p-md h-full max-h-[570px]">
<div class="flex justify-between items-center mb-sm pb-sm border-b border-outline-variant">
<h2 class="font-headline-md text-headline-md text-on-surface">Feed de Alertas</h2>
<span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors" data-icon="filter_list">filter_list</span>
</div>
<div class="flex-grow overflow-y-auto pr-2 space-y-md custom-scrollbar">
<!-- Alert Item 1 -->
<div class="flex gap-md items-start p-sm hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer group">
<div class="flex-shrink-0 w-10 h-10 bg-error-container text-on-error-container rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]" data-icon="medical_services" data-weight="fill" style="font-variation-settings: 'FILL' 1;">medical_services</span>
</div>
<div class="flex flex-col gap-xs flex-grow">
<h3 class="font-label-bold text-label-bold text-on-surface leading-tight">Falta de insumos en Hospital Central de Valencia</h3>
<div class="flex justify-between items-center mt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="location_on">location_on</span>
                                    Carabobo
                                </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Hace 12 min</span>
</div>
</div>
</div>
<div class="h-[1px] w-full bg-outline-variant/50"></div>
<!-- Alert Item 2 -->
<div class="flex gap-md items-start p-sm hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer group">
<div class="flex-shrink-0 w-10 h-10 bg-error-container text-on-error-container rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]" data-icon="water_damage" data-weight="fill" style="font-variation-settings: 'FILL' 1;">water_damage</span>
</div>
<div class="flex flex-col gap-xs flex-grow">
<h3 class="font-label-bold text-label-bold text-on-surface leading-tight">Inundación en Sector El Limón</h3>
<div class="flex justify-between items-center mt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="location_on">location_on</span>
                                    Aragua
                                </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Hace 45 min</span>
</div>
</div>
</div>
<div class="h-[1px] w-full bg-outline-variant/50"></div>
<!-- Alert Item 3 -->
<div class="flex gap-md items-start p-sm hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer group">
<div class="flex-shrink-0 w-10 h-10 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]" data-icon="local_shipping" data-weight="fill" style="font-variation-settings: 'FILL' 1;">local_shipping</span>
</div>
<div class="flex flex-col gap-xs flex-grow">
<h3 class="font-label-bold text-label-bold text-on-surface leading-tight">Despliegue logístico iniciado hacia Táchira</h3>
<div class="flex justify-between items-center mt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="route">route</span>
                                    Logística
                                </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Hace 2 hrs</span>
</div>
</div>
</div>
</div>
<button class="w-full mt-sm py-2 border border-outline text-on-surface font-label-bold text-label-bold rounded hover:bg-surface-container transition-colors">
                    Ver todas las alertas
                </button>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-dim border-t border-outline-variant flat no shadows full-width bottom mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center px-container-margin py-lg w-full max-w-7xl mx-auto">
<span class="font-label-bold text-label-bold text-primary mb-md md:mb-0 text-center md:text-left">
                © 2024 RelieveVZLA - Gestión de Emergencias Humanitarias
            </span>
<nav class="flex gap-lg flex-wrap justify-center">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Términos de Servicio</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Privacidad</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Contacto Soporte</a>
</nav>
</div>
</footer>
<style>
        /* Minimalist scrollbar for feed */
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #e1e3e4; /* surface-variant */
            border-radius: 4px;
        }
        .custom-scrollbar:hover::-webkit-scrollbar-thumb {
            background-color: #8f6f6d; /* outline */
        }
    </style>
</body></html>