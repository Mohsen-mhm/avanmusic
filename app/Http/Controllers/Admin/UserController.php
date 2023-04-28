<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index', ['users' => User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatar' => ['file', 'max:512'],
            'superuser' => ['required', 'in:0,1'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '-' . mt_rand(11111, 99999) . '.' . $avatar->getClientOriginalExtension();

            $path = 'avatars/' . $avatarName;
            Storage::disk('public')->put($path, file_get_contents($avatar));

            $validatedData['avatar'] = $avatarName;
        }

        User::create($validatedData);

        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.users.edit', ['user' => User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'avatar' => ['file', 'max:512'],
            'superuser' => ['in:0,1'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['superuser'] = (int) $request->input('superuser');

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '-' . mt_rand(11111, 99999) . '.' . $avatar->getClientOriginalExtension();

            $path = 'avatars/' . $avatarName;
            Storage::disk('public')->put($path, file_get_contents($avatar));

            $validatedData['avatar'] = $avatarName;
        }

        $user->update($validatedData);

        return redirect()->route('admin.users.index');
    }
}
