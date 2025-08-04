<?php

namespace App\Http\Controllers;

use App\Models\DidacticMaterial;
use App\Models\Course;
use Illuminate\Http\Request;

class DidacticMaterialController extends Controller
{
    public function index()
    {
        $materials = DidacticMaterial::with('course')->get();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('materials.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_name' => 'required',
            'file_path' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        DidacticMaterial::create($request->all());

        return redirect()->route('materials.index')->with('success', 'Material creado correctamente');
    }

    public function show(DidacticMaterial $material)
    {
        return view('materials.show', compact('material'));
    }

    public function edit(DidacticMaterial $material)
    {
        $courses = Course::all();
        return view('materials.edit', compact('material', 'courses'));
    }

    public function update(Request $request, DidacticMaterial $material)
    {
        $request->validate([
            'material_name' => 'required',
            'file_path' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

        $material->update($request->all());

        return redirect()->route('materials.index')->with('success', 'Material actualizado correctamente');
    }

    public function destroy(DidacticMaterial $material)
    {
        $material->delete();

        return redirect()->route('materials.index')->with('success', 'Material eliminado correctamente');
    }
}
