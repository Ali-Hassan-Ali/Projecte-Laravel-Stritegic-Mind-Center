<?php

namespace App\Http\Controllers;

use App\Calender;
use App\Category;
use App\ClassRoom;
use App\Course;
use App\File;
use App\Http\Middleware\StudentMiddleware;
use App\Message;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{

    public function index()
    {
        $classrooms = ClassRoom::all();
        $Teachers = Teacher::all();
        $Students = Student::all();
        return view('welcome',compact('classrooms','Teachers','Students'));
    }/*end of index*/

    public function profile()
    {
        $classrooms = ClassRoom::all();
        $Teachers = Teacher::all();
        $Students = Student::all();
        $files  = File::all();
        return view('pages.profile',compact('classrooms','Teachers','Students','files'));
    }/*end of profile*/


    public function logoute()
    {
        auth()->logout();
        return view('welcome');
    }/*end of logout*/

    public function edituser(User $user,$id)
    {
        $user = User::find($id);
        return view('pages.profile.editUsers',compact('user'));
    }/*end of edit user*/

    public function new(Request $request)
    {
//        $Message = session()->flash('success', __('site.added_successfully'));
        $Message = Message::create($request->all());

        return response()->json($Message);

    }/*end of function new*/

    public function AllCourse(Request $request)
    {
        $courses = Course::all();
        $Categorys = Category::all();
        $classrooms = ClassRoom::where('courses_id');
        return view('pages.allcourse', compact('courses','Categorys','classrooms'));
    }/*end of function new*/

}//end of Controller
