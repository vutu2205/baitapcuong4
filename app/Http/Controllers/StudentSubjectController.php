<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    public function create()
    {
        $students = Student::with('classRoom')->orderBy('name')->get();
        $subjects = Subject::orderBy('name')->get();

        return view('class.student-subject', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $student = Student::findOrFail($request->student_id);
        $student->subjects()->syncWithoutDetaching([$request->subject_id]);

        return redirect()->route('classes.index')->with('success', 'Đăng ký môn thành công!');
    }
}
