<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class MaterialController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('material_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $material = Material::all();

        return view('material.index', compact('material'));
    }

    public function create()
    {
        abort_if(Gate::denies('material_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('material.create');
    }

    public function store(StoreMaterialRequest $request)
    {

      
        Material::create($request->validated());

        return redirect()->route('material.index');
    }

    public function show(Material $material)
    {
        abort_if(Gate::denies('material_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('material.show', compact('material'));
    }

    public function edit(Material $material)
    {
        abort_if(Gate::denies('material_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('material.edit', compact('material'));
    }

    public function update(UpdateMaterialRequest $request, Material $material)
    {

       $material->update($request->validated());

        return redirect()->route('material.index');
    }

    public function destroy(Material $material)
    {
        abort_if(Gate::denies('material_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $material->delete();

        return redirect()->route('material.index');
    }
}
