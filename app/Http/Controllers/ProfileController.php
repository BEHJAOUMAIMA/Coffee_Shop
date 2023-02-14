<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profileEdit');
    }
    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);
        redirect()->route('profile')->with('notif', 'Profile Updated Successfully');
    }

}
