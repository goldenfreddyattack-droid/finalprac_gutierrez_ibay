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
        return view('student.create');
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

}
