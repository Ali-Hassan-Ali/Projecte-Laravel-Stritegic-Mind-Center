<?php

namespace App\Http\Controllers\dashboard;

use App\ClassRoom;
use App\Comment;
use App\Course;
use App\File;
use App\Http\Controllers\Controller;
use App\Teacher;
use http\Env\Response;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{

    public function index(Request $request)
    {
        $classrooms = ClassRoom::when($request->search, function($q) use ($request){

        return $q->where('name', 'like', '%' . $request->search . '%')
            ->orWhere('category_id', 'like', '%' . $request->search . '%');

    })->latest()->paginate(5);
//        dd($classrooms);
        return view('dashboard.classroom.index', compact('classrooms'));
    }/*end of index*/


    public function create()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('dashboard.classroom.create',compact('courses','teachers'));
    }/*end of create*/


    public function store(Request $request)
    {
        $request->validate([
            'teachers_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validate*/

        ClassRoom::create($request->all());

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.classroom.index');
    }/*end of store*/


    public function show(ClassRoom $classRoom, $id)
    {
        $classRoom = ClassRoom::find($id);
        $files = File::all();
        $comments = Comment::all();
        return view('pages.classroom',compact('classRoom','files','comments'));
    }/*end of show*/


    public function edit(ClassRoom $classroom)
    {
        $courses =  Course::all();
        $teachers =  Teacher::all();
        return view('dashboard.classroom.edit',compact('classroom','courses','teachers'));
    }/*end of edit*/


    public function update(Request $request, ClassRoom $classRoom)
    {
        $request->validate([
            'teachers_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validate*/

        $classRoom->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.classroom.index');
    }/*end of update*/


    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.classroom.index');
    }/*end of destroy*/

}//end of controller
