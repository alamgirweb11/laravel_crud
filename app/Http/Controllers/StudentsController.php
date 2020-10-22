<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
     // redirect home page 
    public function home(){
        return view('crud.pages.home');
    } 
    // add student section start
    public function addStudent(){
         return view('crud.pages.add-student-form');
    }
    public function saveValue(Request $request){
            //   return $request->all();
            $this->validate($request,[
                  'name' => 'required',
                  'email' => 'required',
                  'mobile' => 'required'
            ]);
            $data = new Students();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->save();
            return redirect('/students-list')->with('message','Student Added Successfully.');
    }
    // add student section start

    // show student list section
    public function showStudentList(){
                $students = Students::all();
            return view('crud.pages.students-list',[
                  'students' => $students
            ]);
    }
    // edit student info section
    public function editStudent($id){
        $student = Students::find($id);
        return view('crud.pages.edit-student-form',[
              'student' => $student
        ]);
    }
    public function updateValue(Request $request){
                    $student = Students::find($request->id);
                    $student->name = $request->name;
                    $student->email = $request->email;
                    $student->mobile = $request->mobile;
                    $student->save();
                    return redirect('/students-list')->with('message','Student Info Updated Successfully.');
    }
    // edit student info section
  
    // delete student info section
    public function deleteStudentInfo($id){
              $student = Students::find($id);
              $student->delete();
              return redirect('/students-list')->with('message','Student Info Deleted Successfully');
    }
}
