<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');

        //return view('create', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request->all());
        $students = new Student;
        $students->firstname = $request->firstName;
        $students->lastname = $request->lastName;
        $students->mobile = $request->mobile;
        $students->email = $request->email;
        $students->branch = $request->branch;
        $students->address = $request->address;
        $students->hostel = $request->hostel;

        $students->save();

        return back()->withSuccess('_Student Created !!!!_');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $student = student::where('id', $id)->first();
        return view('edit', ['students' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return back()->withSuccess('student deleted !!!!');
    }
}
