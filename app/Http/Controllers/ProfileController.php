<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $validatedData = Validator::validate($request->all(), [
            'name' => ['required', 'string'],
            'avatar' => ['file', 'max:512']
        ]);

        if (isset($validatedData['avatar'])) {
            $image = $request->file('avatar');

            $avatarName = time() . '-' . mt_rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('avatars', $image, $avatarName);

            $validatedData['avatar'] = $avatarName;
        }

        $user->update($validatedData);

        return redirect()->back();
    }
}
