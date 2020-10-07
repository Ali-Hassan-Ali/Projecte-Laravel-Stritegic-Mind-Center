<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TrainerController extends Controller
{
   public function index()
    {
        $trainers = Trainer::all();
        return view('dashboard.settings.trainer.index',compact('trainers'));
    }/*end of index*/

    public function create()
    {
        return view('dashboard.settings.trainer.create');
    }/*end of create*/

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/trainer_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of if

        Trainer::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.trainer.index');
    }/*end of store*/

    public function edit(Trainer $trainer)
    {
        return view('dashboard.settings.trainer.edit',compact('trainer'));
    }/*end of edit*/

    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image',
            'description' => 'required',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($trainer->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/trainer_images/' . $trainer->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/trainer_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();/*end of rename*/

        }//end of external if

        $trainer->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.trainer.index');
    }/*end of update*/

    public function destroy(Trainer $trainer)
    {
        if ($trainer->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/trainer_images/' . $trainer->image);

        }//end of if change

        $trainer->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.trainer.index');
    }/*end of destroy*/

}//end of Controller
