<?php

namespace App\Http\Controllers;

use App\Filters\EmpleadoFilter;
use App\Models\Empleado;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Http\Resources\EmpleadoCollection;
use App\Http\Resources\EmpleadoResource;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EmpleadoFilter();
        $queryItems = $filter->transform($request);
        $includeDepartamento = $request->query('includeDepartamentos');
        $empleado = Empleado::where($queryItems);
        if ($includeDepartamento) {
            $empleado = $empleado->with('departamento');
        }
        return new EmpleadoCollection($empleado->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadoRequest $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json(new EmpleadoResource($empleado), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return new EmpleadoResource($empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete($empleado);
        return response()->json(null, 204);
    }
}
