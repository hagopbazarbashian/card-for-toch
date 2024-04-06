<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shopslider;

class ShopSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $shopsliders = shopslider::orderBy('created_at', 'desc')->get();
            return view('admin.shop.shop-page-slider-index',compact('shopsliders'));

        } catch (\Exception $e) {

           return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {

        return view('admin.shop.shop-page-slider-create');

        } catch (\Exception $e) {

           return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'photo'=>'required|max:2048|mimes:png,jpg,jpeg'
            ]);

            $logo = $request->file('photo');

            if ($logo) {
                // If an image is uploaded
                $logoFileNameee = $logo->hashName();
                $destinationPathh = public_path('admin-slider');

                // Move the uploaded image to the destination folder
                $logo->move($destinationPathh, $logoFileNameee);

                // Path to the saved logo image
                $logoImagePath = $destinationPathh . '/' . $logoFileNameee;
            } else {
                // If no image is uploaded, use the default image
                $logoFileNameee = ''; // Use a different variable name to store the filename
            }


            $shopslider = shopslider::create([
                'photo' => $logoFileNameee,
                'title' => $request->title,
                'description' => $request->description,
            ]);

             return redirect()->back()->with('succes', 'Your Slider Successfully Created.');

        } catch (\Exception $e) {

           return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            $shopslider = shopslider::find($id);
            return view('admin.shop.shop-page-slider-edit',compact('shopslider'));

        } catch (\Exception $e) {

           return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $addcourse = shopslider::find($id);

            $logo = $request->file('photo');
            if ($logo) {
                // If a new image is uploaded
                $logoFileName = $logo->hashName();
                $destinationPath = public_path('admin-slider');
                $logo->move($destinationPath, $logoFileName);

                // Delete the previous image if it exists
                if (file_exists($destinationPath . DIRECTORY_SEPARATOR . $addcourse->photo)) {
                    unlink($destinationPath . DIRECTORY_SEPARATOR . $addcourse->photo);
                }

                // Path to the saved logo image
                $logoImagePath = $destinationPath . DIRECTORY_SEPARATOR . $logoFileName;
            } else {
                // If no new image is uploaded, keep the existing image
                $logoFileName = $addcourse->photo;
            }

            $addcourse->update([
                'photo' => $logoFileName,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->back()->with('succes', 'Your Slide was successfully updated.');

        } catch (\Exception $e) {
            // Handle the exception here
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $ourinstructor = shopslider::find($id);

            // Define the path where images are stored
            $destinationPath = public_path('admin-slider');

            // Delete the previous image if it exists
            if (file_exists($destinationPath . DIRECTORY_SEPARATOR . $ourinstructor->photo)) {
                unlink($destinationPath . DIRECTORY_SEPARATOR . $ourinstructor->photo);
            }

            $ourinstructor->delete();
            return redirect()->back()->with('error', 'Deleted Successfully');

        } catch (\Exception $e) {
            // Handle the exception here
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }
}
