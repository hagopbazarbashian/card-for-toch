<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.  
     *
     * @return \Illuminate\Http\Response  
     */   
    public function index()
    {
        $categorys = category::get();
         return view('admin.category.category-index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category-create');   
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
                    'name' => 'required',
                ]);
            
            
                if ($request->hasFile('photo')) {
                    $photo = $request->file('photo');
                    $photoFileName = $photo->hashName();
                    $destinationPath = public_path('category');
                    $photo->move($destinationPath, $photoFileName);
                }
            
                category::create([
                    'name' => $request->name,
                    'photo' => $photoFileName,
                ]);
            
                return redirect()->route('admin-category.index')->with('success', 'Your Category was successfully created.');
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
         $category = category::find($id);
         return view('admin.category.category-edit',compact('category'));   
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
            $request->validate([
                'photos' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required',
            ]);

            $newproduct = category::findOrFail($id);

      
            if ($request->hasFile('photo')) {
                // Delete the old photo if it exists
                if ($newproduct->photo && file_exists(public_path('category/' . $newproduct->photo))) {
                    unlink(public_path('category/' . $newproduct->photo));
                }

                $photo = $request->file('photo');
                $photoFileName = $photo->hashName();
                $destinationPath = public_path('category');
                $photo->move($destinationPath, $photoFileName);

            
                $newproduct->photo = $photoFileName;
            }

                $newproduct->name = $request->name;

                $newproduct->save();

            return redirect()->route('admin-category.index')->with('succes', 'Your Category  was successfully updated.');

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
            $category = category::findOrFail($id);
            $category->delete();
            return redirect()->route('admin-category.index')->with('succes', 'Category deleted successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
       

    }
}
