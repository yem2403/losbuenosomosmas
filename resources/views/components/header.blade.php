@props(['showSearch' => true, 'showButton' => true])

<header class="bg-surface border-b border-outline-variant full-width top-0 z-50">
    <div class="flex justify-between items-center w-full px-container-margin h-touch-target max-w-7xl mx-auto">
        <div class="flex items-center gap-md">
            <a class="text-headline-md font-headline-md font-bold text-primary" href="#">RelieveVZLA</a>
            <nav class="hidden md:flex gap-md">
                <a class="text-on-surface-variant font-label-bold text-label-bold hover:bg-surface-container transition-colors px-3 py-2 rounded-lg" href="#">Publico</a>
                <a class="text-on-surface-variant font-label-bold text-label-bold hover:bg-surface-container transition-colors px-3 py-2 rounded-lg" href="#">Admin</a>
            </nav>
        </div>
        
        @if($showSearch)
        <div class="hidden md:flex flex-1 max-w-md mx-md">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all h-10" placeholder="Buscar recursos o zonas..." type="text"/>
            </div>
        </div>
        @endif
        
        @if($showButton)
        <button class="bg-primary text-on-primary font-label-bold text-label-bold px-lg h-10 rounded-lg hover:bg-surface-tint transition-colors flex items-center justify-center whitespace-nowrap hidden md:flex shadow-sm">
            Solicitar Ayuda
        </button>
        @endif
        
        <button class="md:hidden text-on-surface flex items-center justify-center h-touch-target w-touch-target hover:bg-surface-container rounded-full">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>
</header>
