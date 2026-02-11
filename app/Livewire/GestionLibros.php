<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Libro;

class GestionLibros extends Component
{
    public $titulo, $edad, $resena, $libro_id;
    public $search = ''; // Propiedad para el buscador
    public $isOpen = false;

    public function updatedSearch()
    {
        // Opcional: podrías resetear páginas aquí si tuvieras paginación
    }

    public function render()
    {
        return view('livewire.gestion-libros', [
            'libros' => Libro::where('titulo', 'like', '%' . $this->search . '%')
                ->orWhere('resena', 'like', '%' . $this->search . '%')
                ->orderBy('orden', 'asc')
                ->get(),
        ])->layout('components.layouts.app');
    }

    public function create()
    {
        $this->reset(['titulo', 'edad', 'resena', 'libro_id']);
        $this->isOpen = true;
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $this->libro_id = $id;
        $this->titulo = $libro->titulo;
        $this->edad = $libro->edad;
        $this->resena = $libro->resena;
        $this->isOpen = true;
    }

    public function store()
    {
        Libro::updateOrCreate(['id' => $this->libro_id], [
            'titulo' => $this->titulo,
            'edad' => $this->edad,
            'resena' => $this->resena,
        ]);
        $this->isOpen = false;
    }

    public function delete($id)
    {
        Libro::find($id)->delete();
        $this->isOpen = false;
    }

    public function mover($id, $direccion)
    {
        $libroActual = Libro::find($id);
        
        // Buscamos al vecino inmediato según la dirección
        $libroVecino = ($direccion == 'up') 
            ? Libro::where('orden', '<', $libroActual->orden)->orderBy('orden', 'desc')->first()
            : Libro::where('orden', '>', $libroActual->orden)->orderBy('orden', 'asc')->first();

        if ($libroVecino) {
            // Intercambiamos los valores de orden
            $ordenTemporal = $libroActual->orden;
            $libroActual->orden = $libroVecino->orden;
            $libroVecino->orden = $ordenTemporal;

            $libroActual->save();
            $libroVecino->save();
        }
    }
}
