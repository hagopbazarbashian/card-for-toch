<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\newproduct;


class AddNewcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */   
    public function index()
    {
        try {

          $newproducts = newproduct::get();
          return view('Admin.shop.add-product.product-index',compact('newproducts'));

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
          return view('Admin.shop.add-product.product-create');

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
                    'photo' => 'required',
                    'title' => 'required',
                    'description' => 'required|max:250',
                    'price' => 'required',
                    'symbole' => 'required',
                ]);
            
                $photoFileName = null; // Initialize the variable
            
                if ($request->hasFile('photo')) {
                    $photo = $request->file('photo');
                    $photoFileName = $photo->hashName();
                    $destinationPath = public_path('productimages');
                    $photo->move($destinationPath, $photoFileName);
                }
            
                $newproduct = newproduct::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'price' => $request->price,
                    'symbole' => $request->symbole,
                    'fee' => $request->fee,
                    'photo' => $photoFileName,
                ]);
            
                return redirect()->route('add-new-card.index')->with('success', 'Your product was successfully created.');
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
            $newproduct = newproduct::find($id);
           return view('admin.shop.add-product.product-edit',compact('newproduct'));

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
            $request->validate([
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required',
                'description' => 'max:250',
            ]);

            $newproduct = newproduct::findOrFail($id);

      
            if ($request->hasFile('photo')) {
                // Delete the old photo if it exists
                if ($newproduct->photo && file_exists(public_path('productimages/' . $newproduct->photo))) {
                    unlink(public_path('productimages/' . $newproduct->photo));
                }

                $photo = $request->file('photo');
                $photoFileName = $photo->hashName();
                $destinationPath = public_path('productimages');
                $photo->move($destinationPath, $photoFileName);

            
                $newproduct->photo = $photoFileName;
            }

                $newproduct->title = $request->title;
                $newproduct->description = $request->description;
                 $newproduct->fee = $request->fee;
                $newproduct->price = $request->price;
                $newproduct->symbole = $request->symbole;

                $newproduct->save();

            return redirect()->route('add-new-card.index')->with('success', 'Your product was successfully updated.');

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
            // Find the product by ID
            $product = newproduct::findOrFail($id);  

            // Delete associated photos
            $product->delete();

            return redirect()->route('add-new-card.index')->with('succes', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
