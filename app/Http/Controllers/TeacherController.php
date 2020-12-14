<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
     $teachers = Teacher::orderBy('id','desc')->get();
     return view('teachers',compact('teachers'));
    }
    public function addTeacher(Request $request){
        $teacher=new Teacher();
        $teacher->firstname=$request->firstname;
        $teacher->lastname=$request->lastname;
        $teacher->email=$request->email;
        $teacher->phone=$request->phone;
        $teacher->save();
        return response()->json($teacher);
    }

    public function getTeacherById($id){
        $teacher=Teacher::find($id);
        return response()->json($teacher);
    }
    public function updateTeacher(Request $request){
        $teacher= Teacher::find($request->id);
        $teacher->firstname=$request->firstname;
        $teacher->lastname=$request->lastname;
        $teacher->email=$request->email;
        $teacher->phone=$request->phone;
        $teacher->save();
        return response()->json($teacher);
    }
}
