<?php

namespace App\Http\Controllers;

use App\Models\CreateConsult;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use iamge;

class UserControllers extends Controller
{
    public function index()
        {
        $kita=User::find(Auth::user()->id);
        $user = CreateConsult::all()->where('user_id',$kita->id);
        // $user = CreateConsult::find(Auth::user()->id)->get();
        if($user){
            return view('user.profile')->with('user',$user)->with('title','Profile'); 
        }
        else{
            return view('user.profile')->with('title','Profile');
        }
 
        }

    public function profile()
    {
        return view('user.nama', [
            'title' => 'Profile Lengkap'
        ]);
    }

    public function histori()
    {
        $user = CreateConsult::find(Auth::user()->id)->get();
        
        return view('user.histori')->with('user',$user)->with('title','History Counsult');  
    }

    public function setting()
    {
        return view('user.setting', [
            'title' => 'Pengaturan'
        ]);
        
    }

    /**
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */


    public function edit(User $user)
    {
        $user=User::find(Auth::user()->id);

        return view('user.edit')->with('user',$user)->with('title','Edit Profile');
}

/**
 * 
 * @param \Illuminate\Http\Request $request
 * @param \App\Model\User $user
 * @return \Illuminate\Http\Response
 */

   
    public function update(Request $request)
    {
        // $rules=([
        //     'name' => 'required|max:255',
        //     'username' => 'required|min:5|max:20|unique:users',
        //     'email' => 'required|email:dns',
        // ]);
    
        // if($request->username != $user->username){
        //     $rules['usename']  = 'required|min:5|unique:users';
        // }
    
    
        // if (request()->hasFile('photo')) {
        //     if($user->photo && file_exists(storage_path('app/public/photos/' . $user->photo))){
        //         Storage::delete('app/public/photos/'.$user->photo);
        //     }
    
        //     $file = $request->file('photo');
        //     $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
        //     $request->photo->move(storage_path('app/public/photos'), $fileName);
        //     $user->photo = $fileName;
        // }
    
        // $validatedData=$request->validate($rules);

        // $validatedData['user_id'] = auth()->user()->id;
        
        // User::where('id', $user->id)
        // ->Update($validatedData);

        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns',
        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect('/user.nama')->with('success', 'Jadwal ditambahkan');
        }
}