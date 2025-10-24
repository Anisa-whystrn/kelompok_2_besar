<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // ✅ Tambahkan method ini
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true]);
            return redirect('/');
        }

        return back()->withErrors(['error' => 'Username atau password salah']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/');
    }

    public function update(Request $request)
    {
        if (!session('admin_logged_in')) {
            return response()->json(['success' => false], 403);
        }

        $request->validate([
            'edukasi_content_html' => 'required',
            'hero_image_url' => 'nullable|url',
            'gambar_edukasi_url' => 'nullable|url'
        ]);

        Article::updateOrCreate(
            ['id' => 1],
            $request->only(['edukasi_content_html', 'hero_image_url', 'gambar_edukasi_url'])
        );

        return response()->json(['success' => true]);
    }
}