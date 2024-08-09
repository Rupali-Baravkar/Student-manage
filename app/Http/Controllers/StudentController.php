<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateForm;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::get();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentCreateForm $request)
    {
        $data = $request->validated();
        Student::create($data);
        return redirect('/students')->with('success', 'Student added successfully..');

    }

    public function show(string $id)
    {
      $student = Student::find($id);
      return view('student.view', compact('student'));
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data =  $request->validated();
        $student->update($data);
        return redirect()->route('students.index')->with('success', 'Student updated successfully..!');
    }

    public function destroy(string $id)
    {
       $student = Student::find($id);
       $student->delete();
       return redirect()->route('students.index')->with('success', 'Student deleted successfully..');
    }
}
