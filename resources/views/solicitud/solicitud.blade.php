<x-layouts.app title="Solicitud de Ayuda Humanitaria - RelieveVZLA">
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
</x-layouts.app>