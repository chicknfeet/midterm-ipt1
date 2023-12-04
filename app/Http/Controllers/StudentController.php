<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return response($students);
    }

    public function show($id){
        $student = Student::find($id);
        return response($student);
    }

    public function store(Request $request){
        $student = Student::create($request->all());
        return response($student);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());
        return response($student);
    }

    public function destroy($id){
        Student::destroy($id);
        return response(['message'=>'Delete Success',]);
    }
}
