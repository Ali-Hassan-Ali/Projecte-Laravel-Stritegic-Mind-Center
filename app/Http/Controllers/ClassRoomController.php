<?php

namespace App\Http\Controllers;

use App\ClassRoom;
use App\Comment;
use App\File;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{

    public function index()
    {

    }/*end of index*/

    public function create()
    {

    }/*end of create*/

    public function store(Request $request)
    {

    }/*end of store*/

    public function show(ClassRoom $classRoom,$id)
    {
        $classRoom = ClassRoom::find($id);
        $files = File::all();
        $comments = Comment::all();
        return view('pages.classroom',compact('classRoom','files','comments'));
//        return $classRoom;
    }/*end of show*/

    public function edit(ClassRoom $classRoom)
    {

    }/*end of edit*/


    public function update(Request $request, ClassRoom $classRoom)
    {

    }/*end of update*/


    public function destroy(ClassRoom $classRoom)
    {

    }/*end of destroy*/

}/*end of Controller*/
