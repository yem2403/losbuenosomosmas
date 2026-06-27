<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Solicitud de Ayuda Humanitaria - RelieveVZLA</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
    </style>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-surface border-b border-outline-variant full-width top-0 z-50">
<div class="flex justify-between items-center w-full px-container-margin h-touch-target max-w-7xl mx-auto">
<div class="flex items-center gap-md">
<a class="text-headline-md font-headline-md font-bold text-primary" href="#">RelieveVZLA</a>
<nav class="hidden md:flex gap-md">
<a class="text-on-surface-variant font-label-bold text-label-bold hover:bg-surface-container transition-colors px-3 py-2 rounded-lg" href="#">Publico</a>
<a class="text-on-surface-variant font-label-bold text-label-bold hover:bg-surface-container transition-colors px-3 py-2 rounded-lg" href="#">Admin</a>
</nav>
</div>
<!-- Search Bar Placeholder / Desktop -->
<div class="hidden md:flex flex-1 max-w-md mx-md">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all h-10" placeholder="Buscar recursos o zonas..." type="text"/>
</div>
</div>
<button class="bg-primary text-on-primary font-label-bold text-label-bold px-lg h-10 rounded-lg hover:bg-surface-tint transition-colors flex items-center justify-center whitespace-nowrap hidden md:flex shadow-sm">
                Solicitar Ayuda
            </button>
<button class="md:hidden text-on-surface flex items-center justify-center h-touch-target w-touch-target hover:bg-surface-container rounded-full">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<!-- Main Content (Form) -->
<main class="flex-grow flex flex-col items-center justify-center py-xl px-container-margin md:px-lg max-w-7xl mx-auto w-full">
<div class="w-full max-w-2xl">
<!-- Header Section -->
<div class="mb-lg text-center md:text-left">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-background mb-sm">
                    Solicitud de Ayuda Humanitaria
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    Complete este formulario para reportar una emergencia o solicitar asistencia crítica.
                </p>
</div>
<!-- Form Card -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md md:p-xl shadow-sm relative overflow-hidden">
<!-- Accent border left -->
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
<form action="#" class="space-y-lg" method="POST">
<!-- Personal Info Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-sm" for="nombre">Nombre</label>
<input class="w-full h-touch-target bg-surface-container-low border border-outline-variant rounded-lg px-md font-body-md text-body-md text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary outline-none transition-all" id="nombre" name="nombre" required="" type="text"/>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-sm" for="apellido">Apellido</label>
<input class="w-full h-touch-target bg-surface-container-low border border-outline-variant rounded-lg px-md font-body-md text-body-md text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary outline-none transition-all" id="apellido" name="apellido" required="" type="text"/>
</div>
</div>
<!-- Contact & Location Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-sm" for="telefono">Teléfono (WhatsApp/SMS)</label>
<div class="flex">
<span class="inline-flex items-center px-md border border-r-0 border-outline-variant bg-surface-variant text-on-surface-variant rounded-l-lg font-body-md text-body-md">
                                    +58
                                </span>
<input class="w-full h-touch-target bg-surface-container-low border border-outline-variant rounded-r-lg px-md font-body-md text-body-md text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary outline-none transition-all" id="telefono" name="telefono" placeholder="414 123 4567" required="" type="tel"/>
</div>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-sm" for="ubicacion">Ubicación (Estado/Ciudad)</label>
<select class="w-full h-touch-target bg-surface-container-low border border-outline-variant rounded-lg px-md font-body-md text-body-md text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary outline-none transition-all appearance-none cursor-pointer" id="ubicacion" name="ubicacion" required="">
<option disabled="" selected="" value="">Seleccione ubicación...</option>
<option value="Distrito Capital">Distrito Capital</option>
<option value="Miranda">Miranda</option>
<option value="Zulia">Zulia</option>
<option value="Carabobo">Carabobo</option>
<option value="Lara">Lara</option>
<!-- Add more as needed -->
</select>
</div>
</div>
<!-- Situation Description -->
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-sm" for="descripcion">Descripción Detallada de la Situación</label>
<textarea class="w-full bg-surface-container-low border border-outline-variant rounded-lg p-md font-body-md text-body-md text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary outline-none transition-all resize-y" id="descripcion" name="descripcion" placeholder="Describa el tipo de emergencia, cantidad de personas afectadas, recursos necesarios (agua, comida, medicina), y cualquier punto de referencia para llegar al lugar." required="" rows="5"></textarea>
</div>
<!-- Emergency Types (Chips) -->
<div>
<span class="block font-label-bold text-label-bold text-on-surface mb-sm">Tipo de Ayuda Requerida (Opcional)</span>
<div class="flex flex-wrap gap-sm">
<label class="cursor-pointer">
<input class="peer sr-only" name="tipo_ayuda" type="checkbox" value="medica"/>
<div class="px-md py-sm border border-outline-variant rounded-full text-on-surface-variant font-label-sm text-label-sm peer-checked:bg-error-container peer-checked:text-on-error-container peer-checked:border-error-container transition-colors flex items-center gap-xs">
<span class="material-symbols-outlined text-[18px]">medical_services</span>
                                    Atención Médica
                                </div>
</label>
<label class="cursor-pointer">
<input class="peer sr-only" name="tipo_ayuda" type="checkbox" value="alimentos"/>
<div class="px-md py-sm border border-outline-variant rounded-full text-on-surface-variant font-label-sm text-label-sm peer-checked:bg-secondary-fixed peer-checked:text-on-secondary-fixed peer-checked:border-secondary-fixed transition-colors flex items-center gap-xs">
<span class="material-symbols-outlined text-[18px]">restaurant</span>
                                    Alimentos
                                </div>
</label>
<label class="cursor-pointer">
<input class="peer sr-only" name="tipo_ayuda" type="checkbox" value="agua"/>
<div class="px-md py-sm border border-outline-variant rounded-full text-on-surface-variant font-label-sm text-label-sm peer-checked:bg-tertiary-fixed peer-checked:text-on-tertiary-fixed peer-checked:border-tertiary-fixed transition-colors flex items-center gap-xs">
<span class="material-symbols-outlined text-[18px]">water_drop</span>
                                    Agua Potable
                                </div>
</label>
</div>
</div>
<!-- Submit Button -->
<div class="pt-sm">
<button class="w-full h-touch-target bg-primary text-on-primary font-label-bold text-label-bold rounded-lg hover:bg-surface-tint active:scale-[0.98] transition-all flex items-center justify-center gap-sm shadow-sm group" type="submit">
<span class="material-symbols-outlined text-[20px] group-hover:animate-pulse">send</span>
                            Enviar Solicitud de Ayuda
                        </button>
</div>
</form>
</div>
<!-- Instructions/Disclaimer -->
<div class="mt-lg p-md bg-surface-container rounded-lg flex items-start gap-md border border-surface-variant">
<span class="material-symbols-outlined text-on-surface-variant shrink-0 mt-1">info</span>
<p class="font-label-sm text-label-sm text-on-surface-variant">
<strong class="text-on-surface">Uso Responsable:</strong> Este sistema es para reportar emergencias reales y coordinar logística humanitaria. Toda la información enviada es confidencial y será procesada por coordinadores autorizados. El mal uso de este formulario puede retrasar la ayuda a quienes realmente la necesitan.
                </p>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest border-t border-outline-variant full-width bottom mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center px-container-margin py-lg w-full max-w-7xl mx-auto gap-md md:gap-0">
<div class="text-on-surface-variant font-label-sm text-label-sm text-center md:text-left">
                © 2024 RelieveVZLA - Gestión de Emergencias Humanitarias
            </div>
<nav class="flex gap-lg">
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Términos de Servicio</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Privacidad</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-primary transition-colors opacity-80 hover:opacity-100" href="#">Contacto Soporte</a>
</nav>
<div class="font-label-bold text-label-bold text-primary">
                RelieveVZLA
            </div>
</div>
</footer>
</body></html>