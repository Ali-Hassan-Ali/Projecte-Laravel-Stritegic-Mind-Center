<?php

namespace App\Http\Middleware;

use App\Course;
use App\Student;
use Closure;

class StudentMiddleware
{
    public function handle($request, Closure $next)
    {
        $student = Student::with('Courses_id');
        $course  = Course::with('id');
        if ($student == $course) {
            return redirect()->route('/profile');
        } else {
//            return redirect()->route('dashboard.welcome');
            return $next($request);
        }/*end if*/

//        return $next($request);

    }/*end of function middleware Student*/

}//end of class middleware
