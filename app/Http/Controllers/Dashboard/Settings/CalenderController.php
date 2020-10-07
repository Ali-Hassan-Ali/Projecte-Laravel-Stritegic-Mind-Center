<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Calender;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CalenderController extends Controller
{

    public function index()
    {
        $calenders = Calender::all();
        return view('dashboard.settings.calender.index',compact('calenders'));
    }/*end of index*/


    public function create()
    {
        $users = User::all();
        return view('dashboard.settings.calender.create',compact('users'));
    }/*end of create*/


    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'users_id' => 'required',
            'image' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/calender_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();/*the rename image*/

        }//end of if

        Calender::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.calender.index');
    }/*end of store*/


    public function edit(Calender $calender)
    {
        $users = User::all();
        return view('dashboard.settings.calender.edit',compact('calender','users'));
    }/*end of edit*/


    public function update(Request $request, Calender $calender)
    {
        $request->validate([
            'description' => 'required',
            'users_id' => 'required',
            'image' => 'image',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($calender->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/calender_images/' . $calender->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/calender_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();/*end of rename*/

        }//end of external if


        $calender->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.calender.index');
    }/*end of update*/


    public function destroy(Calender $calender)
    {
        if ($calender->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/calender_images/' . $calender->image);

        }//end of if change
        $calender->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.calender.index');
    }/*end of destroy*/

}//end of Controller
