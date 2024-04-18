<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use App\Http\Requests\PropiedadesRequest;

/**
 * Class PropiedadeController
 * @package App\Http\Controllers
 */
class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedades::paginate();

        return view('propiedades.index', compact('propiedades'))
            ->with('i', (request()->input('page', 1) - 1) * $propiedades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propiedad = new Propiedades();
        return view('propiedades.create', compact('propiedad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropiedadesRequest $request)
    {
        return $request->all();
        Propiedades::create($request->validated());

          // Manejar carga de imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                // Aquí puedes también guardar la ruta de la imagen en la base de datos o realizar otras acciones
            }
        }

    return redirect()->route('propiedades.index')->with('success', 'Propiedad creada con éxito');

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedade created successfully.');
    }

  
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $propiedad = Propiedades::find($id);

        return view('propiedades.show', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $propiedad = Propiedades::find($id);

        return view('propiedades.edit', compact('propiedad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropiedadesRequest $request, Propiedades $propiedade)
    {
        $propiedade->update($request->validated());

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedade updated successfully');
    }

    public function destroy($id)
    {
        Propiedades::find($id)->delete();

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedade deleted successfully');
    }
}
