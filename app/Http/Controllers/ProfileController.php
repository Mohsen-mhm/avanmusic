<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index', ['user' => auth()->user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'avatar' => ['file', 'max:512']
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '-' . mt_rand(11111, 99999) . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = $avatar->storeAs('avatars', $avatarName, 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        $user->update($validatedData);

        return back();
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        $validatedData = $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (! Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'رمز عبور وارد شده با رمز عبور فعلی مطابقت ندارد.']);
        }

        $user->update([
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
