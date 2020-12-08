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
}
