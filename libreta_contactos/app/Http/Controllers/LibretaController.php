<?php

namespace App\Http\Controllers;

use App\Models\Libreta;
use http\Env\Response;
use Illuminate\Http\Request;

class LibretaController extends Controller
{
    /**
     * Display a listing of the resource.
     * */
    public function index()
    {
        $libreta = Libreta::all();
        return view('index', compact('libreta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Libreta::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->tel
        ]);

        return redirect()->route('index')
                ->with('success', 'Contacto agregado correctamente !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libreta  $libreta
     * @return \Illuminate\Http\Response
     */
    public function show(Libreta $libreta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libreta  $libreta
     */
    public function edit($id)
    {
       try{
           $libreta_id = decrypt($id);
       }
       catch (\Exception $e){
           return redirect()
               ->back()
               ->with('error', 'Registro no válido' );
       }
        $libreta = Libreta::find($libreta_id);
        return view('edit', compact('libreta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request, Libreta $libreta)
    {
        Libreta::where('id', $libreta->id)->update([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->tel
        ]);
        return redirect()
                ->route('index')
                ->with('success', 'Contacto modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libreta  $libreta
     */
    public function destroy(Request $request, Libreta $libreta)
    {
        $libreta->delete();
        return redirect()
            ->route('index')
            ->with('success', 'Contacto eliminado correctamente');
    }
}
