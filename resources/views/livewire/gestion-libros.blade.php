<div class="min-h-screen bg-slate-50">
<style>
    @media print {
        @page {
            margin: 1.2cm 1.5cm;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: white !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Ocultar UI */
        header, .fixed, button, input,
        select, textarea, .group-hover\:opacity-100 {
            display: none !important;
        }

        main, .min-h-screen, .max-w-5xl {
            background-color: white !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .bg-\[\#f8f8f8\] {
            background-color: white !important;
            padding: 0 !important;
            gap: 0 !important;
        }

        /* Espaciado entre tarjetas */
        .space-y-6 > * + *,
        .space-y-4 > * + * {
            margin-top: 0.4rem !important;
        }

        /* Título general de la página */
        main::before {
            content: "Recursos literarios y audiovisuales sobre adopción";
            display: block;
            text-align: center;
            font-size: 17px;
            font-weight: 900;
            margin-bottom: 1.4rem;
            color: #1e293b;
            letter-spacing: -0.02em;
            text-transform: uppercase;
        }
        main::after {
            content: "";
            display: block;
            width: 70px;
            height: 3px;
            background: #6366f1;
            margin: 0 auto 1.9rem auto;
            border-radius: 2px;
        }

        /* ── TARJETA ── */
        [wire\:key^="libro-"] {
            break-inside: avoid !important;
            page-break-inside: avoid !important;
            margin-bottom: 0.4rem !important;
            box-shadow: none !important;
            border: 1px solid #cbd5e1 !important;
            border-left: 4px solid var(--card-color, #6366f1) !important;
            /* Forzar layout horizontal — Tailwind md: no aplica en print */
            display: flex !important;
            flex-direction: row !important;
            background: white !important;
        }

        /* Columna izquierda: título + badge */
        [wire\:key^="libro-"] > div:first-child {
            width: 30% !important;
            min-width: 30% !important;
            max-width: 30% !important;
            padding: 0.5rem 0.7rem !important;
            border-bottom: none !important;
            border-right: 1px solid #e2e8f0 !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: flex-start !important;
            gap: 0 !important;
            background: #f8faff !important;
            position: relative !important;
            overflow: hidden !important;
        }

        /* El div interno que envuelve h2 + badge */
        [wire\:key^="libro-"] > div:first-child > div {
            margin-bottom: 0 !important;
        }

        /* Título */
        [wire\:key^="libro-"] h2 {
            font-size: 12px !important;
            line-height: 1.2 !important;
            margin-bottom: 0.25rem !important;
            color: #0f172a !important;
        }

        /* Badge de edad — usa el color dinámico de la tarjeta */
        [wire\:key^="libro-"] .inline-block {
            font-size: 7px !important;
            padding: 1px 5px !important;
            display: inline-block !important;
            margin-top: 0 !important;
            line-height: 1.6 !important;
            background-color: var(--card-color, #6366f1) !important;
        }

        /* Ícono de categoría: visible en print, pegado al borde derecho */
        [wire\:key^="libro-"] .categoria-icono {
            display: block !important;
            position: absolute !important;
            top: 20px !important;
            right: -6px !important;
            transform: translateY(-50%) !important;
            left: auto !important;
            bottom: auto !important;
            opacity: 0.05 !important;
        }
        [wire\:key^="libro-"] .categoria-icono span {
            font-size: 2.4rem !important;
            filter: grayscale(100%) !important;
            display: block !important;
        }

        /* Ocultar todos los .absolute EXCEPTO el ícono de categoría */
        [wire\:key^="libro-"] .absolute:not(.categoria-icono) {
            display: none !important;
        }

        /* Columna derecha: reseña */
        [wire\:key^="libro-"] > div:nth-child(2) {
            flex: 1 !important;
            padding: 0.5rem 0.8rem !important;
            background: white !important;
            position: relative !important;
        }

        /* Texto reseña */
        [wire\:key^="libro-"] p {
            font-size: 10.5px !important;
            line-height: 1.5 !important;
            color: #334155 !important;
            margin: 0 !important;
        }

        /* Ocultar barra lateral de color (tercer div) */
        [wire\:key^="libro-"] > div:nth-child(3) {
            display: none !important;
        }
    }
</style>
    <header class="sticky top-0 z-40 bg-white border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <div class="flex items-center gap-3">
                    <div class="bg-indigo-600 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <span class="text-xl font-black text-slate-800 tracking-tight uppercase">Biblioteca Adopción</span>
                </div>

                <div class="flex items-center gap-4 flex-1 justify-end max-w-2xl">
                    <div class="relative w-full max-w-xs">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input wire:model.live="search" type="text" placeholder="Buscar..."
                            class="w-full bg-slate-100 border-none rounded-xl py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-indigo-500 transition-all">
                    </div>

                    <button onclick="window.print()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-6 rounded-xl transition-all shadow-md active:scale-95 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        Exportar PDF
                    </button>

                    <button wire:click="create"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-xl transition-all shadow-md active:scale-95 whitespace-nowrap">
                        + Nuevo
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="py-10">
        <div class="max-w-5xl mx-auto px-4">

            <div class="max-w-5xl mx-auto space-y-4">
                <div class="max-w-5xl mx-auto space-y-6 p-8 bg-[#f8f8f8]">
    @foreach ($libros as $libro)
        @php
            $estilos = [
                ['border' => 'border-l-indigo-600', 'tag' => 'bg-indigo-600', 'text' => 'text-indigo-600', 'hex' => '#4f46e5'],
                ['border' => 'border-l-rose-500',   'tag' => 'bg-rose-500',   'text' => 'text-rose-500',   'hex' => '#f43f5e'],
                ['border' => 'border-l-amber-500',  'tag' => 'bg-amber-500',  'text' => 'text-amber-500',  'hex' => '#f59e0b'],
                ['border' => 'border-l-emerald-600', 'tag' => 'bg-emerald-600', 'text' => 'text-emerald-600', 'hex' => '#059669'],
            ];
            $ui = $estilos[$loop->index % count($estilos)];
        @endphp

        <div wire:key="libro-{{ $libro->id }}"
             style="--card-color: {{ $ui['hex'] }}"
             class="relative flex flex-col md:flex-row bg-white shadow-[10px_10px_0px_0px_rgba(0,0,0,0.03)] border border-slate-200">

            <div class="w-full md:w-1/3 p-8 border-b md:border-b-0 md:border-r border-slate-100 flex flex-col justify-between relative">
                @php
                    $categorias = [
                        'Libros' => [
                            'icono' => '📚',
                            'bg' => 'bg-slate-50',
                            'text' => 'text-slate-300'
                        ],
                        'Canciones' => [
                            'icono' => '🎵',
                            'bg' => 'bg-slate-50',
                            'text' => 'text-slate-300'
                        ],
                        'Películas' => [
                            'icono' => '🎬',
                            'bg' => 'bg-slate-50',
                            'text' => 'text-slate-300'
                        ]
                    ];
                    $categoria = $categorias[$libro->categoria] ?? $categorias['Libros'];
                @endphp
                
                <!-- Icono de categoría como fondo (web) / visible en print -->
                <div class="categoria-icono absolute top-[-1px] right-[-20px] opacity-5">
                    <span class="text-7xl grayscale">{{ $categoria['icono'] }}</span>
                </div>
                
                <div>
                    <div class="mb-4" wire:click="edit({{ $libro->id }})">
                        <h2 class="text-2xl font-black leading-none tracking-[calc(-0.05em)] uppercase text-slate-900 break-words">
                            {{ $libro->titulo }}
                        </h2>
                    </div>
                    <div class="inline-block {{ $ui['tag'] }} text-white text-[9px] font-black px-2 py-0.5 uppercase tracking-widest">
                        {{ $libro->edad }}
                    </div>
                </div>
            </div>

            <div class="flex-1 p-8 bg-white relative">
                <span class="absolute top-4 right-8 text-6xl font-serif text-slate-100 select-none">”</span>
                
                <p class="relative z-10 text-slate-600 text-[15px] leading-relaxed font-medium italic">
                    {{ $libro->resena }}
                </p>

                <!-- <div class="flex items-center gap-6 border-t border-slate-50 pt-4">
                    <button wire:click.stop="edit({{ $libro->id }})" class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-black transition-colors">
                        Editar Registro
                    </button>
                    
                    <div class="flex gap-4 ml-auto">
                        <button wire:click.stop="mover({{ $libro->id }}, 'up')" class="text-slate-300 hover:text-black transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <button wire:click.stop="mover({{ $libro->id }}, 'down')" class="text-slate-300 hover:text-black transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                </div> -->
            </div>

            <div class="hidden md:block w-1 {{ $ui['tag'] }}"></div>
        </div>
    @endforeach
</div>
                @if ($libros->isEmpty())
                    <div class="text-center py-20">
                        <div class="bg-slate-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-10 w-10 text-slate-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800">No encontramos ese libro</h3>
                        <p class="text-slate-500">Prueba con otras palabras o agrega uno nuevo.</p>
                    </div>
                @endif
            </div>

            @if ($isOpen)
                <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-md flex items-center justify-center z-50 p-4">
                    <div class="bg-white rounded-3xl p-8 w-full max-w-3xl shadow-2xl border border-white/20">
                        <h2 class="text-2xl font-extrabold text-slate-800 mb-6 flex items-center gap-2">
                            {{ $libro_id ? '📝 Editar Reseña' : '✨ Nueva Entrada' }}
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-1 ml-2">Título del
                                    Libro</label>
                                <input type="text" wire:model="titulo"
                                    class="w-full border-none rounded-2xl p-4 bg-slate-100 focus:ring-2 focus:ring-indigo-500 transition-all font-semibold text-slate-700">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-1 ml-2">Edad /
                                    Público</label>
                                <input type="text" wire:model="edad"
                                    class="w-full border-none rounded-2xl p-4 bg-slate-100 focus:ring-2 focus:ring-indigo-500 transition-all font-semibold text-slate-700">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-1 ml-2">Categoría</label>
                            <select wire:model="categoria"
                                class="w-full border-none rounded-2xl p-4 bg-slate-100 focus:ring-2 focus:ring-indigo-500 transition-all font-semibold text-slate-700">
                                <option value="Libros">📚 Libros</option>
                                <option value="Canciones">🎵 Canciones</option>
                                <option value="Películas">🎬 Películas</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-1 ml-2">Reseña
                                Completa</label>
                            <textarea wire:model="resena"
                                class="w-full border-none rounded-2xl p-6 bg-slate-100 focus:ring-2 focus:ring-indigo-500 transition-all text-slate-600 leading-relaxed text-lg"
                                rows="10" placeholder="Escribe aquí la magia de este libro..."></textarea>
                        </div>

                        <div class="flex justify-between mt-8">
                            @if ($libro_id)
                                <button wire:click="delete({{ $libro_id }})"
                                    class="px-4 py-2 text-red-400 hover:text-red-600 font-medium transition italic">Eliminar
                                    este libro</button>
                            @else
                                <div></div>
                            @endif

                            <div class="flex gap-4">
                                <button wire:click="$set('isOpen', false)"
                                    class="text-slate-400 font-bold px-6 py-3 hover:text-slate-600">Cancelar</button>
                                <button wire:click="store"
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-3 rounded-2xl font-bold shadow-lg shadow-indigo-200 transition-all active:scale-95">
                                    Guardar Cambios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </main>
</div>