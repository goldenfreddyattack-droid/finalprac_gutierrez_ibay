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
}
