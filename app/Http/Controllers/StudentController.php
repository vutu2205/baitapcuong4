<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassRoom;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classRoom')->orderBy('id')->get();

        return view('students.index', compact('students'));
    }

    public function create($class_id)
    {
        $classes = ClassRoom::all();

        return view('class.add_student', compact('classes', 'class_id'));
    }

    // Xử lý lưu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class_id' => 'required|exists:class_rooms,id'
        ]);

        Student::create([
            'name' => $request->name,
            'class_id' => $request->class_id
        ]);

        return redirect()->back()->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $classes = ClassRoom::all();

        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class_id' => 'required|exists:class_rooms,id',
        ]);

        Student::findOrFail($id)->update([
            'name' => $request->name,
            'class_id' => $request->class_id,
        ]);

        return redirect()->route('students.index')->with('success', 'Cập nhật sinh viên thành công.');
    }

    public function delete($id)
    {
        Student::destroy($id);

        return redirect()->route('students.index')->with('success', 'Đã xóa sinh viên.');
    }
}
