<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Level;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $data['courses'] =  Course::orderBy('id','desc')->paginate(10);
        return view('admin.courses.courses',$data);
    }

    public function create(){
        $data['semesters'] =  Semester::all();
        $data['levels'] =  Level::all();
        $data['units'] =  Unit::all();
        $data['departments'] =  Department::all();
        return view('admin.courses.create',$data);
    }

    public function store(Request $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        Course::create($data);
        return redirect()->route('admin.courses')->with('success',"Course created successfully");
    }

    public function edit($id){
        $data['semesters'] =  Semester::all();
        $data['levels'] =  Level::all();
        $data['units'] =  Unit::all();
        $data['departments'] =  Department::all();
        $data['course'] =  Course::find($id);
        return view('admin.courses.edit',$data);
    }

    public function update(Request $request){
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->title);
        Course::where('id',$request->id)->update($data);
        return redirect()->route('admin.courses')->with('success',"Course updated successfully");
    }

    public function delete($id){
        Course::find($id)->delete();
        return redirect()->route('admin.courses')->with('success',"Course deleted successfully");
    }
}
