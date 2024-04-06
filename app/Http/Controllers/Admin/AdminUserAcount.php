<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cardform;
use App\Models\socelmedia;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\File;
use Hash;
use Auth;

class AdminUserAcount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.user.create-acount-to-user');
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create a note file with sample content
        $noteFilePath = storage_path('app\notes.txt');

        // Pass the note content to the view
        return view('admin.user.show-admin-create-user', compact('noteFilePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {

        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            // Email already exists
            return redirect()->back()->with('error', 'You already have this email');
        }

        $hashedPassword = Hash::make($request->input('password'));
        $token = hash('sha256', time());

        $use = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $hashedPassword,
            'token'=>$token
            // 'status' => 0
        ]);

        //    For Work
           $cardform = cardform::create([
            'user_id' => $use->id,
            'full_name' => 'Work',
            'email' => $use->email,
            'color'=>'#68b7e2'
            ]);

            $socelmedia = socelmedia::create([
            'cardform_id' => $cardform->id,
            ]);


            $cardform = cardform::create([
                'user_id' => $use->id,
                'full_name' => 'Personal',
                'email' => $use->email,
                'color'=>'#68b7e2'
            ]);

            $socelmedia = socelmedia::create([
             'cardform_id' => $cardform->id,
            ]);

            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            // Save the data to a text file
            $noteContent = "Name: $name\nEmail: $email\nPassword: $password\n";

            // Specify the file path (adjust this path based on your needs)
            $filePath = storage_path('app/notes.txt');

            // Append data to the file
            file_put_contents($filePath, $noteContent, FILE_APPEND);
            return redirect()->route('create-acount.create')->with('succes', 'Registration successful!');
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
