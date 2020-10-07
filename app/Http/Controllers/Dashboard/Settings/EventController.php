<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('dashboard.settings.event.index',compact('events'));
    }/*end of index*/


    public function create()
    {
        return view('dashboard.settings.event.create');
    }/*end of create*/


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/event_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();/*rename image*/

        }//end of if

        Event::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.event.index');
    }/*end of store*/


    public function edit(Event $event)
    {
        return view('dashboard.settings.event.edit',compact('event'));
    }/*end of edit*/


    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($event->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/event_images/' . $event->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/event_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();/*end of rename*/

        }//end of external if

        $event->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.event.index');
    }/*end of update*/

    public function destroy(Event $event)
    {
        if ($event->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/student_images/' . $event->image);

        }//end of if change

        $event->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.settings.event.index');
    }/*end of destroy*/

}//end of Controller
