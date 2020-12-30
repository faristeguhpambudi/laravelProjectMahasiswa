<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dengan eloquent
        $students = Student::all();
        return view('student/index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CEK VALIDASI
        $request->validate([
            'nama' => 'required|max:255',
            'nrp' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        //masukkin ke database
        $student = new Student;
        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;

        //simpan database
        $student->save();

        //redirect
        return redirect('/students')->with('pesan', 'data students berhasil ditambahkan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('student/detail', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //UNTUK FOR EDIT HALAMAN
        return view('student/edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //CEK VALIDASI
        $request->validate([
            'nama' => 'required|max:255',
            'nrp' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        //UNTUK UPDATE DATA
        Student::find($student);
        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;
        $student->save();

        //redirect
        return redirect('/students')->with('pesan', 'data students berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //UNTUK MENGHAPUS DATA
        Student::destroy($student->id);
        //redirect
        return redirect('/students')->with('pesan', 'data students berhasil dihapus!');
    }
}
