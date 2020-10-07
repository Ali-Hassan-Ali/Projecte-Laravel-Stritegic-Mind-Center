<?php

namespace App\Http\Controllers\dashboard;

use App\Course;
use App\File;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index(Request $request)
    {
        $files = File::when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('category_id', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.file.index', compact('files'));
    }/*end of index*/


    public function create()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('dashboard.file.create',compact('teachers','courses'));
    }/*end of create*/


    public function store(Request $request)
    {
        $request->validate([
            'name_teacher' => 'required',
            'name_book' => 'required',
            'description' => 'required',
            'file' => 'required',
            'teachers_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $filName = time().'.'.$request->file()->extension();
//        dd($filName);
        $request->file()->move(public_path('uploads'), $filName);

        File::create($request->all());

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.file.index');
    }/*end of store*/


    public function show(File $file)
    {
        //
    }/*end of show*/


    public function edit(File $file)
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('dashboard.file.edit', compact('file','teachers','courses'));
    }/*end of edit*/


    public function update(Request $request, File $file)
    {
        $request->validate([
            'name_teacher' => 'required',
            'name_book' => 'required',
            'description' => 'required',
            'file' => 'required',
            'teachers_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $file->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.file.index');
    }/*end of update*/


    public function destroy(File $file)
    {
        $file->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.course.index');
    }/*end of destroy*/

}//end of Controller
