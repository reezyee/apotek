<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Google_Client;
use Google_Service_PeopleService;

class GoogleController extends Controller
{
    /**
     * Redirect user to Google login.
     */
    public function login()
    {
        return Socialite::driver('google')
            ->scopes(['profile', 'email', 'https://www.googleapis.com/auth/user.addresses.read']) // Menambahkan scope untuk alamat
            ->with(['prompt' => 'select_account']) // Paksa pemilihan akun setiap login
            ->redirect();
    }

    /**
     * Handle Google login callback.
     */
    public function callback()
    {
        try {
            // Ambil data pengguna dari Google
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Terjadi kesalahan saat login!');
        }

        // Cari pengguna berdasarkan email Google
        $user = User::where('email', $googleUser->getEmail())->first();

        // Jika pengguna tidak ditemukan, buat akun baru dengan role "Pelanggan"
        if (!$user) {
            $role = Role::where('name', 'Pelanggan')->first();

            // Ambil akses token
            $accessToken = $googleUser->token;

            // Setup Google Client
            $client = new Google_Client();
            $client->setAccessToken($accessToken);

            // Jika token sudah kadaluarsa, refresh token atau logout
            if ($client->isAccessTokenExpired()) {
                return redirect()->route('login');
            }

            // Membuat instance dari Google People API
            $peopleService = new Google_Service_PeopleService($client);

            // Mengambil data pengguna yang terautentikasi
            $profile = $peopleService->people->get('people/me', [
                'personFields' => 'names,emailAddresses,addresses,phoneNumbers'
            ]);

            // Ambil nama, email, alamat, dan nomor telepon
            $name = $profile->getNames()[0]->getDisplayName();
            $email = $profile->getEmailAddresses()[0]->getValue();
            $address = $profile->getAddresses()[0]->getFormattedValue() ?? 'No address found';
            $phone = $profile->getPhoneNumbers()[0]->getValue() ?? 'No phone number found';

            // Buat pengguna baru
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'address' => $address, // Menyimpan alamat pengguna
                'phone' => $phone, // Menyimpan nomor telepon pengguna
                'password' => bcrypt(Str::random(16)), // Password sementara
                'google_id' => $googleUser->getId(), // Simpan Google ID
                'role_id' => $role ? $role->id : null, // Default ke "Pelanggan"
            ]);
        }

        // Login pengguna ke aplikasi
        Auth::login($user, true); // "true" agar sesi tetap aktif

        // Redirect ke dashboard setelah login
        return redirect()->route('dashboard');
    }

    /**
     * Logout user.
     */
    public function logout()
    {
        // Logout dari aplikasi Laravel
        Auth::logout();

        // Hapus sesi Laravel
        session()->invalidate();
        session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('https://accounts.google.com/Logout?continue=' . urlencode(route('login')));
    }
}
