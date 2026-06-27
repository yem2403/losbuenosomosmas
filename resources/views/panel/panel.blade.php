<x-layouts.admin title="RelieveVZLA - Admin Dashboard">
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
</x-layouts.admin>