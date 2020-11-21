<?php

namespace App\Http\Controllers;
use App\students;
use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function index()
    {
        $data = DB::table('students')->get();
        return view('studentDashboard',compact('data'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $objStudent = new students;
        $objStudent->name = $request->name;
        $objStudent->roll_no = $request->roll_no;
        $objStudent->age = $request->age;
        $objStudent->contact = $request->contact;
        $objStudent->save();
        return redirect('student');
    }
    public function edit(Request $request)
        {
        $id = $request->id;
                    
        $data = DB::table('students')->where('id',$id)->get();
        return view('edit', compact('data'));
        }

    public function update(Request $request)
        {     
            $id = $request->id;
            $objStudent = students::find($id);
            $objStudent->name = $request->name;
            $objStudent->roll_no = $request->roll_no;
            $objStudent->age = $request->age;
            $objStudent->contact = $request->contact;
            $objStudent->update();
            return redirect('student');
        }

    public function destroy(Request $request)
        {
            $id = $request->id;
            $objCat = students::find($id);
            $objCat->delete();
    
            return redirect('student');
        }
}
