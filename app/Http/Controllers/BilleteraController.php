<?php

namespace App\Http\Controllers;

use App\Models\Billetera;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BilleteraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $billeterasActivas = Billetera::where('activo', true)->get();
        $billeterasNoActivas = Billetera::where('activo', false)->get();

        return Inertia::render('Billetera/index',[
            'billeterasActivas' => $billeterasActivas,
            'billeterasNoActivas' => $billeterasNoActivas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Billetera/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|in:banca,efectivo',
        ]);

        Billetera::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'saldo' => $request->saldo,
            'proposito' => $request->proposito
        ]);

        return redirect()->route('billetera.index')
            ->with('success', 'Categoría creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function archive($id)
    {
        $billetera = Billetera::findOrFail($id);
        
        // Solo archivar si está activa
        if ($billetera->activo) {
            $billetera->update([
                'activo' => false
            ]);
        }
        
        return redirect()->route('billetera.index')->with('success', 'Billetera archivada correctamente');
    }
    
    /**
     * Restaurar una billetera (cambiar activo a true)
     */
    public function restore($id)
    {
        $billetera = Billetera::findOrFail($id);
        
        $billetera->update([
            'activo' => true
        ]);
        
        return redirect()->back()->with('success', 'Billetera restaurada correctamente');
    }
}
