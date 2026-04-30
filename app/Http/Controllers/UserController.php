<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Display a listing of the users.
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.data.users', compact('users'));
    }


    // Store a newly created user in storage.
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:8',
                'username' => 'required|string|max:255|unique:users',
            ],
        );

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'username' => $request->username,
        ]);

        return redirect()->route('users.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',

        ]);

        $user->name = $request->name;
        $user->username = $request->username;


        $user->save();

        return redirect()->route('users.index')->with('success', 'Data Berhasil Di Perbarui.');
    }

    // Remove the specified user from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Data Berhasil Dihapus.');
    }

    // Reset the password.
    public function resetPassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string|min:8',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password Berhasil Di Reset.');
    }

    // get reset password
    public function getResetPassword(User $user)
    {
        return view('admin.data.reset-password', compact('user'));
    }
}
