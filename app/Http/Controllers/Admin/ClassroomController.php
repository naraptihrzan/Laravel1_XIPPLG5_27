<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\Student;


class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $classrooms = Classroom::with('student')->get();
        return view('admin.classroom.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $students = Student::all();
        return view('admin.classroom.create', compact('students'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'student_id'  => 'required|exists:students,id',
        'nama_kelas'  => 'required',
        'tingkat'     => 'required',
        'jurusan'     => 'required',
    ]);

    Classroom::create([
        'nama_kelas' => $request->nama_kelas,
        'tingkat'    => $request->tingkat,
        'jurusan'    => $request->jurusan,
        'student_id' => $request->student_id,
    ]);

    return redirect()->route('admin.classrooms.index')
                     ->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classroom = Classroom::with('student')->findOrFail($id);
        return view('admin.classroom.show', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classroom = Classroom::findOrFail($id);
        $students = Student::all();
        return view('admin.classroom.edit', compact('classroom', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'student_id'  => 'required|exists:students,id',
        'nama_kelas'  => 'required',
        'tingkat'     => 'required',
        'jurusan'     => 'required',
    ]);

    $classroom = Classroom::findOrFail($id);
    $classroom->update([
        'student_id'  => $request->student_id,
        'nama_kelas'  => $request->nama_kelas,
        'tingkat'     => $request->tingkat,
        'jurusan'     => $request->jurusan,
    ]);

    return redirect()->route('admin.classrooms.index')
                     ->with('success', 'Data kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
