<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use App\Models\Imagenes;
use App\Http\Requests\PropiedadesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Class PropiedadeController
 * @package App\Http\Controllers
 */
class PropiedadesController extends Controller
{
    public $atributo="none";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atributo="none";
        $propiedades = Propiedades::paginate();

        return view('propiedades.index', compact('propiedades'))
            ->with('i', (request()->input('page', 1) - 1) * $propiedades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $atributo="none";
        $propiedad = new Propiedades();
        return view('propiedades.create')->with(compact('propiedad'), $atributo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropiedadesRequest $request)
    {

        
        Propiedades::create($request->validated());

        return redirect()->route('propiedades.index')
            ->with('success', 'Bid created successfully.');


        // return $request->all();
        Propiedades::create($request->validated());

          // Manejar carga de imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                // Aquí puedes también guardar la ruta de la imagen en la base de datos o realizar otras acciones
            }
        }

        // return redirect()->route('propiedades.index')->with('success', 'Propiedad creada con éxito');

        // return redirect()->route('propiedades.index')
        //     ->with('success', 'Propiedade created successfully.');
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
        // $imagenes=Imagenes::find($id);
        // $imagenes= DB::table('imagenes')->where('inmueble',$id);
       // $user = Imagenes::with('Profile')->where('status', '1')->get();
       $imagenes=Imagenes::where('inmueble',$id)->get(); 
       $data=[
            'propiedad'=> $propiedad,
            'imagenes'=> $imagenes            
        ];
       Storage::put('public/file.txt', json_encode($data));
        return view('propiedades.edit', compact('data'));
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
