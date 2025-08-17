<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();
        return view('admin.pages.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $user->name = $request->username;
        $user->email = $request->email;

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('profile_images'), $fileName);
            $user->profile_image = 'profile_images/' . $fileName;
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        Auth::logout();

        return redirect()->route('login')->with('success', 'Bilgileriniz başarıyla güncellendi. Lütfen tekrardan giriş yapın.');
    }
}
