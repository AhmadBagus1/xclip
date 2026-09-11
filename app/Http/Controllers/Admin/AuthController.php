<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login admin
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->withInput();
        }

        // Cek apakah akun sedang dikunci
        if (
            $user->locked_until &&
            Carbon::now()->lessThan($user->locked_until)
        ) {
            $remainingMinutes = Carbon::now()
                ->diffInMinutes($user->locked_until);

            return back()
                ->withErrors([
                    'email' => "Akun terkunci. Silakan coba lagi dalam {$remainingMinutes} menit.",
                ])
                ->withInput();
        }

        // Jika masa lock sudah selesai
        if (
            $user->locked_until &&
            Carbon::now()->greaterThanOrEqualTo($user->locked_until)
        ) {
            $user->update([
                'login_attempts' => 0,
                'locked_until' => null,
            ]);
        }

        // Cek password
        if (!Hash::check($request->password, $user->password)) {

            $user->increment('login_attempts');

            $user->refresh();

            // Jika gagal 3 kali
            if ($user->login_attempts >= 3) {

                $user->update([
                    'locked_until' => Carbon::now()->addHour(),
                ]);

                return back()
                    ->withErrors([
                        'email' =>
                        'Terlalu banyak percobaan login. Akun dikunci selama 1 jam.',
                    ])
                    ->withInput();
            }

            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->withInput();
        }

        // Login berhasil
        $user->update([
            'login_attempts' => 0,
            'locked_until' => null,
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    /**
     * Logout admin
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
