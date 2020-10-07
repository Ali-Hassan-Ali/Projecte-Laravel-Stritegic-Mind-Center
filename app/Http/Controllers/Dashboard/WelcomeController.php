<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\ClassRoom;
use App\Client;
use App\Order;
use App\Product;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $Teachers_count = Teacher::count();
        $Students_count = Student::count();
        $users_count = User::count();
        $classroom_count = ClassRoom::count();

        return view('dashboard.welcome' , compact('users_count', 'Students_count', 'Teachers_count','classroom_count'));

    }//end of index

}//end of controller
