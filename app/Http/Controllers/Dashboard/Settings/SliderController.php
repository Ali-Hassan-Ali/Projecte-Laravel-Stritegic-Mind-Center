<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.settings.slider.index', compact('sliders'));
    }/*end of index*/


    public function create()
    {
        return view('dashboard.settings.slider.create');
    }/*end of create*/


    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'image' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(1300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/slider_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of if


        Slider::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.slider.index');
    }/*end of store*/


    public function show(Slider $slider)
    {

    }/*end of show*/


    public function edit(Slider $slider)
    {
        return view('dashboard.settings.slider.edit',compact('slider'));
    }/*end of edit*/


    public function update(Request $request, Slider $slider)
    {

        $request->validate([
            'text' => 'required',
            'image' => 'image',
        ]);/*end of validation*/


        $request_data = $request->except(['permissions', 'image']);

        if ($request->image) {

            if ($slider->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/slider_images/' . $slider->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(1300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/slider_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $slider->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.settings.slider.index');
    }/*end of update*/


    public function destroy(Slider $slider)
    {
        if ($slider->image != 'default.png') {

            Storage::disk('public')->delete('/slider_images/' . $slider->image);

        }//end of if

        $slider->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.settings.slider.index');

    }/*end of destroy*/

}//end of Controller
