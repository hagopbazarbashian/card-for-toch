<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cardform;
use Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
         return view('admin.user.user-list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $userId = $id;
        $user = User::find($userId);

        if ($user) {
            // Assuming '0000' is the plain text password you want to set
            $newPassword = Hash::make('0000');

            $user->update([
                'password' => $newPassword,
                'token' => ''
            ]);

            return redirect()->back()->with('succes', 'Password changed successfully!');
        } else {
            return redirect()->back()->with('error', 'User not found!');
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
        $cardform = User::where('id', $id)->first();

        if ($cardform) {
            $newStatus = $cardform->status == 0 ? 1 : 0;

            $cardform->update([
                'status' => $newStatus,
            ]);

            return redirect()->back()->with('succes', 'User status updated successfully');
        } else {
            return redirect()->back()->with('error', 'User not found');
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
        //
    }
}
