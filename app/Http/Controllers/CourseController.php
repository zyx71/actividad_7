<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_key' => 'required|unique:courses,course_key',
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'robotics_kit' => 'nullable|string|max:255',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Curso creado correctamente.');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_key' => 'required|unique:courses,course_key,' . $course->id,
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'robotics_kit' => 'nullable|string|max:255',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Curso actualizado correctamente.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Curso eliminado correctamente.');
    }
}
