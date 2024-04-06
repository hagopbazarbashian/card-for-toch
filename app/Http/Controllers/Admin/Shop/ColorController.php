<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $colors = color::orderBy('created_at', 'desc')->get();
            return view('admin.shop.color.color-index',compact('colors'));

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
            $allColors = color::all();
            return view('admin.shop.color.color-create',compact('allColors'));
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
            // Validate the form inputs
        $request->validate([
            'color_code' => 'required|array',
            'color_code.*' => 'required|string',
            'selected_colors' => 'nullable|array',
            'selected_colors.*' => 'exists:colors,id',
        ]);

        // Get the arrays of colors, color codes, and selected colors
        $colorCodes = $request->input('color_code');
        $selectedColors = $request->input('selected_colors');

        // Loop through each set of color inputs
        foreach ($colorCodes as $key => $color) {
            // Create a new color
            $newColor = color::create([
                'code' => $color,
            ]);

            // Attach the selected colors to the newly created color
            if (!empty($selectedColors[$key])) {
                $newColor->selectedColors()->attach($selectedColors[$key]);
            }
        }

            // Redirect or perform other actions after storing the data
            return redirect()->route('color.index')->with('succes', 'Colors added successfully.');

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
        //
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
            $color = color::where('id' , $id)->first();
            return view('admin.shop.color.color-edit',compact('color'));
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

            $color = color::where('id' , $id)->first();
            $color->update([
                'code'=>$request->code
            ]);
            return redirect()->route('color.index')->with('succes', 'Colors Updated successfully.');

        } catch (\Exception $e) {

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

            $color = color::where('id' , $id)->first();
            $color->delete();
            return redirect()->route('color.index')->with('succes', 'Colors Deleted successfully.');

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
