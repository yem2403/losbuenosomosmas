<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>RelieveVZLA - Admin Dashboard</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "display-lg": ["Inter"],
                        "label-bold": ["Inter"],
                        "body-md": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"]
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
        /* Minimalist scrollbar for a cleaner look */
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
</head>
<body class="bg-background text-on-background min-h-screen flex font-body-md">
<!-- SideNavBar (from JSON) -->
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
<!-- Active Tab: Panel Control -->
<a class="flex items-center space-x-md px-sm py-xs h-touch-target bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full Active: translate-x-1 transition-transform" href="#">
<span class="material-symbols-outlined fill">dashboard</span>
<span class="font-label-bold text-label-bold">Panel Control</span>
</a>
<!-- Inactive Tabs -->
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
<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-md mb-lg">
<div>
<h1 class="font-display-lg text-display-lg sm:text-display-lg text-on-surface">Gestión de Solicitudes</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-sm">Revisión y aprobación de asistencia humanitaria</p>
</div>
<!-- Filters -->
<div class="flex flex-wrap gap-sm">
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">filter_list</span>
<select class="pl-xl pr-lg py-sm h-touch-target bg-surface-container-lowest border border-outline-variant rounded-lg text-label-bold font-label-bold text-on-surface focus:ring-2 focus:ring-secondary-container focus:border-secondary-container appearance-none w-full sm:w-auto">
<option>Todos los Estados</option>
<option>Pendiente</option>
<option>Aprobada</option>
<option>Rechazada</option>
</select>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">location_on</span>
<select class="pl-xl pr-lg py-sm h-touch-target bg-surface-container-lowest border border-outline-variant rounded-lg text-label-bold font-label-bold text-on-surface focus:ring-2 focus:ring-secondary-container focus:border-secondary-container appearance-none w-full sm:w-auto">
<option>Todas las Ubicaciones</option>
<option>Caracas</option>
<option>Maracaibo</option>
<option>Valencia</option>
</select>
</div>
</div>
</div>
<!-- Bento-style Data Grid -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant text-label-sm font-label-bold text-on-surface-variant">
<th class="p-md font-semibold whitespace-nowrap">Fecha</th>
<th class="p-md font-semibold">Solicitante</th>
<th class="p-md font-semibold">Contacto</th>
<th class="p-md font-semibold min-w-[200px]">Descripción</th>
<th class="p-md font-semibold">Ubicación</th>
<th class="p-md font-semibold">Estado</th>
<th class="p-md font-semibold text-right">Acciones</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
<!-- Row 1: Pendiente -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="p-md whitespace-nowrap text-on-surface-variant text-sm">24 Oct 2023</td>
<td class="p-md font-medium">Juan Pérez</td>
<td class="p-md text-on-surface-variant">0414-1234567</td>
<td class="p-md text-sm">Falta de agua potable prolongada en el sector, se requiere cisterna.</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-surface-container rounded text-xs text-on-surface-variant">
<span class="material-symbols-outlined text-[14px]">pin_drop</span> Caracas
                                    </span>
</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-surface-container-high border border-outline-variant rounded-full text-xs font-label-bold text-on-surface">
<span class="w-2 h-2 rounded-full bg-surface-variant border border-outline"></span> Pendiente
                                    </span>
</td>
<td class="p-md">
<div class="flex items-center justify-end gap-xs opacity-100 sm:opacity-0 group-hover:opacity-100 transition-opacity">
<button class="h-10 px-md bg-tertiary-container text-on-tertiary-container rounded-lg font-label-bold text-label-bold hover:bg-tertiary transition-colors" title="Aprobar">
                                            Aprobar
                                        </button>
<button class="h-10 w-10 flex justify-center items-center border border-outline-variant text-on-surface-variant rounded-lg hover:bg-error-container hover:text-on-error-container hover:border-error-container transition-colors" title="Rechazar">
<span class="material-symbols-outlined">close</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Aprobada -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="p-md whitespace-nowrap text-on-surface-variant text-sm">23 Oct 2023</td>
<td class="p-md font-medium">María Rodríguez</td>
<td class="p-md text-on-surface-variant">0424-7654321</td>
<td class="p-md text-sm">Fallo eléctrico total en el hospital central, riesgo alto.</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-surface-container rounded text-xs text-on-surface-variant">
<span class="material-symbols-outlined text-[14px]">pin_drop</span> Maracaibo
                                    </span>
</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-[#e8f5e9] border border-[#a5d6a7] rounded-full text-xs font-label-bold text-[#1b5e20]">
<span class="w-2 h-2 rounded-full bg-[#4caf50]"></span> Aprobada
                                    </span>
</td>
<td class="p-md text-right">
<span class="text-on-surface-variant text-sm italic">Procesada</span>
</td>
</tr>
<!-- Row 3: Rechazada -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="p-md whitespace-nowrap text-on-surface-variant text-sm">22 Oct 2023</td>
<td class="p-md font-medium">Carlos Mendoza</td>
<td class="p-md text-on-surface-variant">0412-5558899</td>
<td class="p-md text-sm">Solicitud de materiales de construcción no prioritarios.</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-surface-container rounded text-xs text-on-surface-variant">
<span class="material-symbols-outlined text-[14px]">pin_drop</span> Valencia
                                    </span>
</td>
<td class="p-md">
<span class="inline-flex items-center gap-xs px-sm py-xs bg-error-container border border-error-container rounded-full text-xs font-label-bold text-on-error-container">
<span class="w-2 h-2 rounded-full bg-error"></span> Rechazada
                                    </span>
</td>
<td class="p-md text-right">
<span class="text-on-surface-variant text-sm italic">Procesada</span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination / Footer -->
<div class="border-t border-outline-variant p-md flex flex-col sm:flex-row justify-between items-center bg-surface-container-lowest gap-md">
<span class="text-label-sm text-on-surface-variant">Mostrando 1 a 3 de 45 registros</span>
<div class="flex gap-xs">
<button class="h-10 px-md border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors font-label-bold disabled:opacity-50" disabled="">Anterior</button>
<button class="h-10 px-md border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors font-label-bold">Siguiente</button>
</div>
</div>
</div>
</div>
</main>
</body></html>