<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invs = Inventario::orderBy('created_at','desc')->get();
        return view('moreCrud.index',compact('invs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moreCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newI = new Inventario;
        $newI->name = $request->input('nombre');
        $newI->num = $request->input('num');
        $newI->date = $request->input('fecha');
        $newI->save();
        return redirect('inventarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        $inv = Inventario::find($inventario->id);
        return view('moreCrud.edit',compact('inv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        $uptI = Inventario::find($inventario->id);

        $uptI->name = $request->input('nombre');
        $uptI->num = $request->input('num');
        $uptI->date = $request->input('fecha');
        $uptI->save();
        return redirect('inventarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $delI = Inventario::find($inventario->id);
        $delI->delete();
        return redirect('inventarios');
    }
}
