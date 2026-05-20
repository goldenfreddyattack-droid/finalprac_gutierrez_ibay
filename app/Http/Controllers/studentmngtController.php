<?php

namespace App\Http\Controllers;
use App\Models\Studentmngt;

use Illuminate\Http\Request;

class studentmngtController extends Controller
{
    public function index()
    {
        $Students = Studentmngt::all();
        return view('student.index', compact('Students'));
    }

    public function create()
    {
        $Students = Studentmngt::all();
        return view('student.index', compact('Students'));
    }
    public function addstudent()
    {
        return view('student.addstudent');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required',
        ]);

        Studentmngt::create($request->all());
        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }

    public function edit($id)
    {
        $student = Studentmngt::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required',
        ]);

        $student = Studentmngt::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Studentmngt::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }

}
