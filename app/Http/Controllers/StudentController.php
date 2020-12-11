<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function fetchStudents(){
    //  $students=Student::all();
    //  $students=Student::where('id',3)->get();
    //  $students=Student::whereBetween('id',[3,10])->get();
     $students=Student::whereBetween('id',[3,10])->orderBy('id','desc')->get();
     return $students;
    }
    
    public function students(){
        $students=Student::all();
        return view('all-student',compact('students'));
    }
    public function addStudent(){
        return view('add-student');
    }
    
    public function storeStudent(Request $request){
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student=new Student();
        $student->name=$name;
        $student->email=$email;
        $student->phone=$phone;
        $student->profileimage=$imageName;
        $student->save();
        return back()->with('student_added','student record has been added');
    }
    public function editStudent($id){
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }

    public function updateStudent(Request $request){
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student=Student::find($request->id);
        $student->name=$name;
        $student->email=$email;
        $student->phone=$phone;
        $student->profileimage=$imageName;
        $student->save();
        return back()->with('student_updated','student record has been updated');
    }

    public function deleteStudent($id){
        $student=Student::find($id);
        unlink(public_path('images').'/'.$student->profileimage);
        $student->delete();
        return back()->with('student_deleted','student has been deleted successfully');
    }

}
