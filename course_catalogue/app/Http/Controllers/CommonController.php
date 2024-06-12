<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Level;
use App\Models\Semester;
use App\Models\Department;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function departments(){
        $data['departments'] = Department::orderBy('id','desc')->paginate(10);
        return view('admin.common.departments',$data);
    }

    public function store_department(Request $request){
        Department::create(['name' => $request->title]);
        return redirect()->route('admin.departments')->with('success',"Department created successfully");
    }

    public function update_department(Request $request){
        Department::where('id',$request->id)->update(['name' => $request->title]);
        return redirect()->route('admin.departments')->with('success',"Department updated successfully");
    }

    public function delete_department($id){
        Department::find($id)->delete();
        return redirect()->route('admin.departments')->with('success',"Department deleted successfully");
    }


    public function semesters(){
        $data['semesters'] = Semester::orderBy('id','desc')->paginate(10);
        return view('admin.common.semesters',$data);
    }

    public function store_semester(Request $request){
        Semester::create(['name' => $request->title]);
        return redirect()->route('admin.semesters')->with('success',"semester created successfully");
    }

    public function update_semester(Request $request){
        Semester::where('id',$request->id)->update(['name' => $request->title]);
        return redirect()->route('admin.semesters')->with('success',"semester updated successfully");
    }

    public function delete_semester($id){
        Semester::find($id)->delete();
        return redirect()->route('admin.semesters')->with('success',"semester deleted successfully");
    }


    public function levels(){
        $data['levels'] = Level::orderBy('id','desc')->paginate(10);
        return view('admin.common.levels',$data);
    }

    public function store_level(Request $request){
        Level::create(['name' => $request->title]);
        return redirect()->route('admin.levels')->with('success',"level created successfully");
    }

    public function update_level(Request $request){
        Level::where('id',$request->id)->update(['name' => $request->title]);
        return redirect()->route('admin.levels')->with('success',"level updated successfully");
    }

    public function delete_level($id){
        Level::find($id)->delete();
        return redirect()->route('admin.levels')->with('success',"level deleted successfully");
    }

    public function units(){
        $data['units'] = Unit::orderBy('id','desc')->paginate(10);
        return view('admin.common.units',$data);
    }

    public function store_unit(Request $request){
        Unit::create(['name' => $request->title]);
        return redirect()->route('admin.units')->with('success',"level created successfully");
    }

    public function update_unit(Request $request){
        Unit::where('id',$request->id)->update(['name' => $request->title]);
        return redirect()->route('admin.units')->with('success',"unit updated successfully");
    }

    public function delete_unit($id){
        Unit::find($id)->delete();
        return redirect()->route('admin.units')->with('success',"unit deleted successfully");
    }
}
