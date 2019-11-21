<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
   public function show(){
//       $students = 'SELECT * FROM students';
//       $students = DB::table('students')->get();
         $students = Student::get();
      return view('students',['students'=>$students]);
   }

   public function deleteStudent($id){
       // DELETE FROM students WHERE id=$id
       $delete = Student::where('id',$id)->delete();
       $students = Student::get();
       return view('students',['students'=>$students]);
   }

   public function addStudent(Request $request){
        // INSERT INTO students(first_name,last_name,email,phone) VALUES ($first_name,ll........);
        $insert = Student::Create($request->all());
       $students = Student::get();
       return view('students',['students'=>$students]);
   }

   public function editStudent($id,Request $request){
       // UPDATE students set first_name='', last_name='', email='',phone='' where id=1

       $params = [
           'first_name'=>$request['first_name'],
           'last_name'=>$request['last_name'],
           'email'=>$request['email'],
           'phone'=>$request['phone']
       ];
       $update = Student::where('id',$id)->update($params);

       $students = Student::get();
       return view('students',['students'=>$students]);
   }

   public function getStudentData($id){
       $selectedStudent = Student::where('id',$id)->first();
       $students = Student::get();
       return view('students',['students'=>$students,'selectedStudent'=>$selectedStudent]);
   }
}
