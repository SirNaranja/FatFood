<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller{

    public function index()
    {

        return view('guser.index',[
            'users'=>User::all(),

         ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('guser.edituser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $item)
    {
        $this->authorize('edit', $item);
        $id=$request->id;
        $validated=$request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'password'=>'string|max:50'
        ]);
        $user=User::findOrFail($id);
        if(strlen(trim($validated['password']))==0){
            $user->password=$request->passwordold;

        }else{
            $user->password = Hash::make($validated['password']);
        }
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,User $item)
    {
        $this->authorize('destroy', $item);
        $id=$request->id;
        $user=User::findOrFail($id);
        if ($user) {
            $user->delete();
        }
        return redirect('/user');
    }

}
