<?php

namespace App\Http\Controllers;
use App\Models\studentmngt;
use Illuminate\Http\Request;
use app\Models\studentmngmnt;
class studentmngtController extends Controller
{
    public function index () {
        $student = studentmngt::all();
        return view ('studentsomething.index', compact('student'));
    }

    public function create () {
        return view ('studentsomething.create');
    }

    public function store (Request $request) {
        studentmngt::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mname' => $request->mname,
            'add' => $request->add,
            'dobirth' => $request->dobirth,
        ]);
        studentmngt::create($request->all());
        return redirect()->route('studentsomething.index')->with('success', 'Student created successfully.') ;
    }

    public function edit (int $id) {
        $student = studentmngt::find($id);
        return view ('studentsomething.edit', compact('student'));
    }

    public function update (Request $request, $id) {
        $student = studentmngt::find($id);
        $student->update($request->all());
        return redirect()->route('studentsomething.index')->with('success', 'Student updated successfully.') ;
    }

    public function destroy (int $id) {
        $student = studentmngt::find($id);
        $student->delete();
        return redirect()->route('studentsomething.index')->with('success', 'Student deleted successfully.') ;
    }
}
