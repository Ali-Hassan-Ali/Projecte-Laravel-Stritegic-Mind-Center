<?php

namespace App\Http\Controllers\dashboard;

use App\Course;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');

        })->when($request->courses_id, function ($q) use ($request) {

            return $q->where('courses_id', $request->courses_id);

        })->latest()->paginate(5);

        return view('dashboard.teacher.index', compact('teachers'));

    }//end of index

    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('dashboard.teacher.create',compact('courses','users'));
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'image' => 'image',
            'age' => 'required',
            'description' => 'required',
            'collage' => 'required',
            'users_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/teacher_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of if check image

        Teacher::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.teacher.index');

    }//end of store

    public function edit(Teacher $teacher)
    {
        $users = User::all();
        $courses = Course::all();
        return view('dashboard.teacher.edit', compact('teacher','courses','users'));
    }/*end of edit*/

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'full_name' => 'required',
            'image' => 'image',
            'age' => 'required',
            'description' => 'required',
            'collage' => 'required',
            'users_id' => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($teacher->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $teacher->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/teacher_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $teacher->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.teacher.index');
    }/*end fo update*/

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.teacher.index');
    }/*end of destroy*/

}//end of Controller
