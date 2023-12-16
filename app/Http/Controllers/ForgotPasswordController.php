<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('halaman/forgot-password');
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::where('nip', $request->nip)->first();

        if ($user) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            // Optional: Setelah mengganti password, Anda bisa login user secara otomatis
            auth()->login($user);

            return redirect('/login')->with('success', 'Password berhasil diubah');
        }
        toastr()->error('NIP tidak ditemukan. Mohon cek kembali.', 'Error');
        return back();
    }
}
