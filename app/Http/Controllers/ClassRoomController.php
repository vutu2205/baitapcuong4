<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();
        return view('class.index', compact('classes'));
    }

    public function create()
    {
        $classes = ClassRoom::all();

        return view('class.create', compact('classes'));
    }

    public function delete($id)
    {
        return $this->destroy($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'teacher' => 'required|string|max:255',
            'students' => 'required|integer|min:0'
        ]);

        ClassRoom::create([
            'name' => $request->name,
            'teacher' => $request->teacher,
            'students' => $request->students,
        ]);

        return redirect()->route('classes.index')->with('success', 'Lớp học được thêm thành công');
    }

    public function edit($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'teacher' => 'required|string|max:255',
            'students' => 'required|integer|min:0'
        ]);

        ClassRoom::findOrFail($id)->update($request->all());
        return redirect()->route('classes.index')->with('success', 'Lớp học được cập nhật thành công');
    }

    public function destroy($id)
    {
        ClassRoom::destroy($id);
        return redirect()->route('classes.index')->with('success', 'Lớp học được xóa thành công');
    }
}