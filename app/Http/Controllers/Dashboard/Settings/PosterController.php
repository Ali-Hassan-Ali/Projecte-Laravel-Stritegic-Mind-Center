<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PosterController extends Controller
{

    public function index()
    {
        $posters = Poster::all();
        return view('dashboard.settings.poster.index',compact('posters'));
    }/*end of index*/

    public function create()
    {
        return view('dashboard.settings.poster.create');
    }/*end of  create*/

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'image' => 'required',
        ]);/*end of validation*/


        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/poster_images/' . $request->image->hashName()));/*rename image*/

            $request_data['image'] = $request->image->hashName();

        }//end of if


        Poster::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.poster.index');
    }/*end of store*/


    public function edit(Poster $poster)
    {
        return view('dashboard.settings.poster.edit',compact('poster'));
    }/*end of edit*/

    public function update(Request $request, Poster $poster)
    {
        $request->validate([
            'status' => 'required',
            'image' => 'image',
        ]);/*end of validation*/

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($poster->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/poster_images/' . $poster->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })/*resize image*/
                ->save(public_path('uploads/poster_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();/*end of rename*/

        }//end of external if
        $poster->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.poster.index');
    }/*end of update*/

    public function destroy(Poster $poster)
    {
        if ($poster->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/poster_images/' . $poster->image);

        }//end of if change

        $poster->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.poster.index');
    }/*end of destroy*/

}// end of Controller
