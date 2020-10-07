<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Client;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('category_id', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.course.index', compact('courses'));

    }//end of index

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.course.create', compact('categories'));

    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);/*end of validation*/


        Course::create($request->all());

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.course.index');

    }//end of store

    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('dashboard.course.edit', compact('course','categories'));
    }//end of edit

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);/*end of validation*/

        $course->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.course.index');

    }//end of update

    public function destroy(Course $course)
    {
        $course->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.course.index');

    }//end of destroy

}//end of controller
