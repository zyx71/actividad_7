<?php

namespace App\Http\Controllers;

use App\Models\LearningGroup;
use Illuminate\Http\Request;

class LearningGroupController extends Controller
{
    public function index()
    {
        $groups = LearningGroup::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        LearningGroup::create($request->all());

        return redirect()->route('groups.index')->with('success', 'Grupo creado correctamente.');
    }

    public function show(LearningGroup $group)
    {
        return view('groups.show', compact('group'));
    }

    public function edit(LearningGroup $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, LearningGroup $group)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $group->update($request->all());

        return redirect()->route('groups.index')->with('success', 'Grupo actualizado correctamente.');
    }

    public function destroy(LearningGroup $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', 'Grupo eliminado correctamente.');
    }
}
