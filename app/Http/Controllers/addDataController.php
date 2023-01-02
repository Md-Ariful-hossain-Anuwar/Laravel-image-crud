<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;

class addDataController extends Controller
{
    public function addData(){
        return view('Add');
    }
    public function studentData(studentRequest $request){
        $request->validated();
        $student = new student;
        $student->student_id = $request->id;
        $student->name = $request->name;
        $student->home = $request->home;
        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $unique_name = time().'.'.$extension;
        $file->move('Photo/student',$unique_name);
        $student->photo = $unique_name;
        $student->save();
        return redirect('/');
    }
}
