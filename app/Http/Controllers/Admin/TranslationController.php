<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\translation;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translations = translation::all();
        return view('admin.translations.index', compact('translations'));
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.translations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'locale' => 'required|string',
            'value' => 'required|string',
        ]);

        Translation::create($request->all());

        return redirect()->route('translations.index')->with('success', 'Translation added successfully.');
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
    public function edit(Translation $translation)
    {
        return view('admin.translations.edit', compact('translation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Translation $translation)
    {
        $request->validate([
            'key' => 'required|string',
            'locale' => 'required|string',
            'value' => 'required|string',
        ]);

        $translation->update($request->all());

        return redirect()->route('translations.index')->with('success', 'Translation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translation $translation)
    {
        $translation->delete();

        return redirect()->route('translations.index')->with('success', 'Translation deleted successfully.');
    }
}
