<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{additionalphoto,newproduct};

class AdminAdditionalPhotoController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $additionalphotos = additionalphoto::with('newproductt')->get();
         return view('admin.additionalphoto.additionalphoto-index',compact('additionalphotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $additionalphotos = additionalphoto::with('newproductt')->get();
         $newproducts = newproduct::get();
         return view('admin.additionalphoto.additionalphoto-create',compact('additionalphotos','newproducts'));
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
                'photo' => 'required',
                'new_product_id' => 'required',
            ]);
        
            $photoFileName = null; // Initialize the variable
        
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoFileName = $photo->hashName();
                $destinationPath = public_path('additionphoto');
                $photo->move($destinationPath, $photoFileName);
            }
        
            $newproduct = additionalphoto::create([
                'new_product_id'=>$request->new_product_id,
                'photo' => $photoFileName,
            ]);
        
            return redirect()->route('admin-additional-photo.index')->with('success', 'Your Addition Photo was successfully created.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
