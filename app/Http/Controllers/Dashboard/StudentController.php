<?php

namespace App\Http\Controllers\dashboard;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    public function index(Request $request)
    {

        $students = Student::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');

        })->when($request->courses_id, function ($q) use ($request) {

            return $q->where('courses_id', $request->courses_id);

        })->latest()->paginate(5);

        return view('dashboard.student.index', compact('students'));
    }/*end of index*/

    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('dashboard.student.create',compact('courses','users'));
    }/*end of create*/

    public function store(Request $request)
    {
        $request->validate([
//            'active'     => 'required',
            'full_name'  => 'required',
            'image'      => 'image',
            'age'        => 'required',
            'description'=> 'required',
            'collage'    => 'required',
            'users_id'   => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/student_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $student = Student::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.student.index');

    }/*end of store*/

    public function show(Student $student)
    {

    }/*end of show*/

    public function edit(Student $student)
    {
        $users = User::all();
        $courses = Course::all();
        return view('dashboard.student.edit', compact('student','courses','users'));
    }/*end of edit*/

    public function update(Request $request, Student $student)
    {
//        dd($request->all());
        $request->validate([
//            'active'     => 'required',
            'full_name'  => 'required',
            'image'      => 'image',
            'age'        => 'required',
            'description'=> 'required',
            'collage'    => 'required',
            'users_id'   => 'required',
            'courses_id' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($student->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $student->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/student_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();/*end of rename*/

        }//end of external if

        $student->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.student.index');
    }/*end of update*/

    public function destroy(Student $student)
    {
        if ($student->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/student_images/' . $student->image);

        }//end of if change

        $student->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.student.index');
    }/*end of delete*/

}/*end of controller*/
